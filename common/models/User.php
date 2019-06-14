<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "oc_user".
 *
 * @property int $user_id
 * @property int $user_group_id
 * @property string $username
 * @property string $password
 * @property string $salt
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $image
 * @property string $code
 * @property string $ip
 * @property int $status
 * @property string $date_added
 * @property string $cat_permission
 * @property string $store_permission
 * @property int $vendor_permission
 * @property string $folder
 * @property string $user_date_start
 * @property string $user_date_end
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;

    const SCENARIO_LOGIN = 'login';
    const SCENARIO_REGISTER = 'register';

    private $auth_key = '';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'oc_user';
    }

    public function scenarios()
    {
        return [
            self::SCENARIO_LOGIN => [
                ['status', 'default', 'value' => self::STATUS_ACTIVE],
                ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
            ],
            self::SCENARIO_REGISTER => [
                [['user_group_id', 'username', 'password', 'salt', 'firstname', 'lastname', 'email', 'image', 'code', 'ip', 'status', 'date_added', 'cat_permission', 'store_permission', 'vendor_permission', 'folder', 'user_date_start', 'user_date_end'], 'required'],
                [['user_group_id', 'vendor_permission'], 'integer'],
                [['date_added', 'user_date_start', 'user_date_end'], 'safe'],
                [['cat_permission', 'store_permission'], 'string'],
                [['username'], 'string', 'max' => 20],
                [['password', 'code', 'ip'], 'string', 'max' => 40],
                [['salt'], 'string', 'max' => 9],
                [['firstname', 'lastname'], 'string', 'max' => 32],
                [['email'], 'string', 'max' => 96],
                [['image'], 'string', 'max' => 255],
                [['status'], 'string', 'max' => 1],
                [['folder'], 'string', 'max' => 128],
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_group_id' => 'User Group ID',
            'username' => 'Username',
            'password' => 'Password',
            'salt' => 'Salt',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'image' => 'Image',
            'code' => 'Code',
            'ip' => 'Ip',
            'status' => 'Status',
            'date_added' => 'Date Added',
            'cat_permission' => 'Cat Permission',
            'store_permission' => 'Store Permission',
            'vendor_permission' => 'Vendor Permission',
            'folder' => 'Folder',
            'user_date_start' => 'User Date Start',
            'user_date_end' => 'User Date End',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['user_id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($user, $password)
    {
        return $user->attributes['password'] == sha1($this->attributes['salt'] . sha1($this->attributes['salt'] . sha1($password)));
    }
}
