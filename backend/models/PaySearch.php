<?php

namespace backend\models;

use common\models\Pay;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class PaySearch extends Model
{
    public $pay_id;
    public $module;
    public $identifier;
    public $customer_id;
    public $payment_code;
    public $amount;
    public $should_pay;
    public $transaction_id;
    public $deposit_bank;
    public $receipt_code;
    public $created_at;
    public $last_payment_time;
    public $overtime;
    public $status;
    public $check_status;
    public $check_user_id;
    public $check_date;
    public $message;
    public $response;
    public $request_type;
    public $module_type;
    public $currency;
    public $transaction_order;
    public $updated_at;
    public $fetch_count;
    public $order_status_id;

    public function search($params)
    {
        $query = Pay::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'pay_id' => $this->pay_id,
            'module' => $this->module,
            'customer_id' => $this->customer_id,
            'payment_code' => $this->payment_code,
            'amount' => $this->amount,
            'should_pay' => $this->should_pay,
            'transaction_id' => $this->transaction_id,
            'deposit_bank' => $this->deposit_bank,
            'receipt_code' => $this->receipt_code,
            'created_at' => $this->created_at,
            'last_payment_time' => $this->last_payment_time,
            'overtime' => $this->overtime,
            'status' => $this->status,
            'check_status' => $this->check_status,
            'check_user_id' => $this->check_user_id,
            'check_date' => $this->check_date,
            'request_type' => $this->request_type,
            'module_type' => $this->module_type,
            'currency' => $this->currency,
            'transaction_order' => $this->transaction_order,
            'updated_at' => $this->updated_at,
            'fetch_count' => $this->fetch_count,
        ]);

        $query->andFilterWhere(['like', 'identifier', $this->identifier])
            ->andFilterWhere(['like', 'message', $this->message])
            ->andFilterWhere(['like', 'response', $this->response]);

        return $dataProvider;
    }

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

            'order_id' => 'Order ID',
            'point_id' => 'Point ID',
            'use_point_id' => 'Use Point ID',
            'invoice_no' => 'Invoice No',
            'invoice_prefix' => 'Invoice Prefix',
            'store_id' => 'Store ID',
            'store_name' => 'Store Name',
            'store_url' => 'Store Url',
            'customer_group_id' => 'Customer Group ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'telephone' => 'Telephone',
            'fax' => 'Fax',
            'custom_field' => 'Custom Field',
            'payment_firstname' => 'Payment Firstname',
            'payment_lastname' => 'Payment Lastname',
            'payment_company' => 'Payment Company',
            'payment_address_1' => 'Payment Address 1',
            'payment_address_2' => 'Payment Address 2',
            'payment_city' => 'Payment City',
            'payment_postcode' => 'Payment Postcode',
            'payment_country' => 'Payment Country',
            'payment_country_id' => 'Payment Country ID',
            'payment_zone' => 'Payment Zone',
            'payment_zone_id' => 'Payment Zone ID',
            'payment_address_format' => 'Payment Address Format',
            'payment_custom_field' => 'Payment Custom Field',
            'payment_method' => 'Payment Method',
            'payment_point' => 'Payment Point',
            'payment_time' => 'Payment Time',
            'shipping_firstname' => 'Shipping Firstname',
            'shipping_lastname' => 'Shipping Lastname',
            'shipping_company' => 'Shipping Company',
            'shipping_address_1' => 'Shipping Address 1',
            'shipping_address_2' => 'Shipping Address 2',
            'shipping_city' => 'Shipping City',
            'shipping_postcode' => 'Shipping Postcode',
            'shipping_country' => 'Shipping Country',
            'shipping_country_id' => 'Shipping Country ID',
            'shipping_zone' => 'Shipping Zone',
            'shipping_zone_id' => 'Shipping Zone ID',
            'shipping_address_format' => 'Shipping Address Format',
            'shipping_custom_field' => 'Shipping Custom Field',
            'shipping_method' => 'Shipping Method',
            'shipping_code' => 'Shipping Code',
            'comment' => 'Comment',
            'total' => 'Total',
            'discount' => 'Discount',
            'order_status_id' => 'Order Status ID',
            'affiliate_id' => 'Affiliate ID',
            'commission' => 'Commission',
            'marketing_id' => 'Marketing ID',
            'tracking' => 'Tracking',
            'language_id' => 'Language ID',
            'currency_id' => 'Currency ID',
            'currency_code' => 'Currency Code',
            'currency_value' => 'Currency Value',
            'ip' => 'Ip',
            'source' => 'Source',
            'forwarded_ip' => 'Forwarded Ip',
            'shopping_area' => 'Shopping Area',
            'tax_rate' => 'Tax Rate',
            'exchange_rate' => 'Exchange Rate',
            'user_agent' => 'User Agent',
            'accept_language' => 'Accept Language',
            'date_added' => 'Date Added',
            'date_modified' => 'Date Modified',
            'cutoff_date' => 'Cutoff Date',
            'payment_telephone' => 'Payment Telephone',
            'shipping_telephone' => 'Shipping Telephone',
            'shipping_time' => 'Shipping Time',
            'confirm_receipt_time' => 'Confirm Receipt Time',
            'transaction_no' => 'Transaction No',
            'billing_order_id' => 'Billing Order ID',
            'billing_order_status' => 'Billing Order Status',
            'shipping_rating' => 'Shipping Rating',
            'shipping_rating_comment' => 'Shipping Rating Comment',
            'shipping_rating_synced' => 'Shipping Rating Synced',
            'refund_id' => 'Refund ID',
            'cancel_reason_id' => 'Cancel Reason ID',
            'weight' => 'Weight',
            'weight_class_id' => 'Weight Class ID',
            'shipping_id_card_type' => 'Shipping Id Card Type',
            'shipping_id_card_number' => 'Shipping Id Card Number',
            'wangdian_new_order_code' => 'Wangdian New Order Code',
            'wangdian_new_order_push_count' => 'Wangdian New Order Push Count',
            'wangdian_new_order_response' => 'Wangdian New Order Response',
            'wangdian_canceled' => 'Wangdian Canceled',
            'wangdian_cancel_order_push_count' => 'Wangdian Cancel Order Push Count',
            'wangdian_cancel_order_response' => 'Wangdian Cancel Order Response',
            'is_presale' => 'Is Presale',
            'customer_service_user_id' => 'Customer Service User ID',
        ];
    }
}