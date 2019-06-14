<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "oc_pay_order".
 *
 * @property int $pay_order_id
 * @property int $pay_id
 * @property string $order_id
 */
class PayOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'oc_pay_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pay_id', 'order_id'], 'required'],
            [['pay_id'], 'integer'],
            [['order_id'], 'string', 'max' => 60],
            [['pay_id', 'order_id'], 'unique', 'targetAttribute' => ['pay_id', 'order_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pay_order_id' => 'Pay Order ID',
            'pay_id' => 'Pay ID',
            'order_id' => 'Order ID',
        ];
    }
}
