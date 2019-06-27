<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "oc_pay".
 *
 * @property int $pay_id
 * @property string $module
 * @property string $identifier
 * @property int $customer_id
 * @property string $payment_code
 * @property double $amount
 * @property double $should_pay
 * @property string $transaction_id
 * @property string $deposit_bank
 * @property string $receipt_code
 * @property string $created_at
 * @property string $last_payment_time
 * @property string $overtime 超时时间
 * @property string $status
 * @property string $check_status
 * @property int $check_user_id 支付审核人员ID
 * @property string $check_date 支付审核时间
 * @property string $message
 * @property string $response
 * @property string $request_type
 * @property string $module_type
 * @property string $currency
 * @property string $transaction_order
 * @property string $updated_at
 * @property int $fetch_count
 */
class Pay extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'oc_pay';
    }

    public function getOrder()
    {
        return $this->hasMany(PayOrder::className(), ['pay_id' => 'pay_id'])
            ->viaTable(Order::className(), ['order_id' => 'order_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['module', 'identifier', 'customer_id', 'payment_code', 'amount', 'should_pay', 'created_at', 'last_payment_time', 'status', 'message', 'response', 'request_type', 'currency', 'transaction_order'], 'required'],
            [['customer_id', 'check_user_id', 'fetch_count'], 'integer'],
            [['amount', 'should_pay'], 'number'],
            [['created_at', 'last_payment_time', 'overtime', 'check_date', 'updated_at'], 'safe'],
            [['response'], 'string'],
            [['module', 'payment_code', 'transaction_id', 'deposit_bank', 'receipt_code', 'status', 'check_status', 'request_type', 'transaction_order'], 'string', 'max' => 60],
            [['identifier'], 'string', 'max' => 200],
            [['message'], 'string', 'max' => 255],
            [['module_type', 'currency'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pay_id' => 'Pay ID',
            'module' => 'Module',
            'identifier' => 'Identifier',
            'customer_id' => 'Customer ID',
            'payment_code' => 'Payment Code',
            'amount' => 'Amount',
            'should_pay' => 'Should Pay',
            'transaction_id' => 'Transaction ID',
            'deposit_bank' => 'Deposit Bank',
            'receipt_code' => 'Receipt Code',
            'created_at' => 'Created At',
            'last_payment_time' => 'Last Payment Time',
            'overtime' => 'Overtime',
            'status' => 'Status',
            'check_status' => 'Check Status',
            'check_user_id' => 'Check User ID',
            'check_date' => 'Check Date',
            'message' => 'Message',
            'response' => 'Response',
            'request_type' => 'Request Type',
            'module_type' => 'Module Type',
            'currency' => 'Currency',
            'transaction_order' => 'Transaction Order',
            'updated_at' => 'Updated At',
            'fetch_count' => 'Fetch Count',
        ];
    }
}
