<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "oc_order_status".
 *
 * @property int $order_status_id
 * @property int $language_id
 * @property string $name
 */
class OrderStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'oc_order_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['language_id', 'name'], 'required'],
            [['language_id'], 'integer'],
            [['name'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_status_id' => 'Order Status ID',
            'language_id' => 'Language ID',
            'name' => 'Name',
        ];
    }
}
