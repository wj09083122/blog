<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "oc_order".
 *
 * @property int $order_id
 * @property int $pay_id
 * @property int $point_id
 * @property int $use_point_id
 * @property int $invoice_no
 * @property string $invoice_prefix
 * @property int $store_id
 * @property string $store_name
 * @property string $store_url
 * @property int $customer_id
 * @property int $customer_group_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $telephone
 * @property string $fax
 * @property string $custom_field
 * @property string $payment_firstname
 * @property string $payment_lastname
 * @property string $payment_company
 * @property string $payment_address_1
 * @property string $payment_address_2
 * @property string $payment_city
 * @property string $payment_postcode
 * @property string $payment_country
 * @property int $payment_country_id
 * @property string $payment_zone
 * @property int $payment_zone_id
 * @property string $payment_address_format
 * @property string $payment_custom_field
 * @property string $payment_method
 * @property string $payment_code
 * @property string $payment_point
 * @property string $payment_time
 * @property string $shipping_firstname
 * @property string $shipping_lastname
 * @property string $shipping_company
 * @property string $shipping_address_1
 * @property string $shipping_address_2
 * @property string $shipping_city
 * @property string $shipping_postcode
 * @property string $shipping_country
 * @property int $shipping_country_id
 * @property string $shipping_zone
 * @property int $shipping_zone_id
 * @property string $shipping_address_format
 * @property string $shipping_custom_field
 * @property string $shipping_method
 * @property string $shipping_code
 * @property string $comment
 * @property string $total
 * @property string $discount
 * @property int $order_status_id
 * @property int $affiliate_id
 * @property string $commission
 * @property int $marketing_id
 * @property string $tracking
 * @property int $language_id
 * @property int $currency_id
 * @property string $currency_code
 * @property string $currency_value
 * @property string $ip
 * @property string $source
 * @property string $forwarded_ip
 * @property string $shopping_area
 * @property string $tax_rate
 * @property string $exchange_rate
 * @property string $user_agent
 * @property string $accept_language
 * @property string $date_added
 * @property string $date_modified
 * @property string $cutoff_date
 * @property string $payment_telephone
 * @property string $shipping_telephone
 * @property string $shipping_time
 * @property string $confirm_receipt_time
 * @property string $transaction_no
 * @property int $billing_order_id
 * @property string $billing_order_status
 * @property int $shipping_rating
 * @property string $shipping_rating_comment
 * @property int $shipping_rating_synced
 * @property string $refund_id
 * @property string $cancel_reason_id
 * @property string $weight
 * @property int $weight_class_id
 * @property string $shipping_id_card_type
 * @property string $shipping_id_card_number
 * @property string $wangdian_new_order_code
 * @property int $wangdian_new_order_push_count
 * @property string $wangdian_new_order_response
 * @property int $wangdian_canceled
 * @property int $wangdian_cancel_order_push_count
 * @property string $wangdian_cancel_order_response
 * @property int $is_presale 是否預售訂單
 * @property int $customer_service_user_id 后台协助下单的客服ID
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'oc_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pay_id', 'point_id', 'use_point_id', 'invoice_no', 'store_id', 'customer_id', 'customer_group_id', 'payment_country_id', 'payment_zone_id', 'shipping_country_id', 'shipping_zone_id', 'order_status_id', 'affiliate_id', 'marketing_id', 'language_id', 'currency_id', 'billing_order_id', 'shipping_rating', 'cancel_reason_id', 'weight_class_id', 'wangdian_new_order_push_count', 'wangdian_canceled', 'wangdian_cancel_order_push_count', 'is_presale', 'customer_service_user_id'], 'integer'],
            [['use_point_id', 'invoice_no', 'invoice_prefix', 'store_name', 'store_url', 'firstname', 'lastname', 'email', 'telephone', 'fax', 'custom_field', 'payment_firstname', 'payment_lastname', 'payment_company', 'payment_address_1', 'payment_address_2', 'payment_city', 'payment_postcode', 'payment_country', 'payment_country_id', 'payment_zone', 'payment_zone_id', 'payment_address_format', 'payment_custom_field', 'payment_method', 'payment_code', 'shipping_firstname', 'shipping_lastname', 'shipping_company', 'shipping_address_1', 'shipping_address_2', 'shipping_city', 'shipping_postcode', 'shipping_country', 'shipping_country_id', 'shipping_zone', 'shipping_zone_id', 'shipping_address_format', 'shipping_custom_field', 'shipping_method', 'shipping_code', 'comment', 'affiliate_id', 'commission', 'marketing_id', 'tracking', 'language_id', 'currency_id', 'currency_code', 'ip', 'forwarded_ip', 'shopping_area', 'tax_rate', 'exchange_rate', 'user_agent', 'accept_language', 'date_added', 'date_modified', 'shipping_id_card_type', 'shipping_id_card_number'], 'required'],
            [['custom_field', 'payment_address_format', 'payment_custom_field', 'shipping_address_format', 'shipping_custom_field', 'comment', 'refund_id', 'wangdian_new_order_response', 'wangdian_cancel_order_response'], 'string'],
            [['payment_point', 'total', 'discount', 'commission', 'currency_value', 'tax_rate', 'exchange_rate', 'weight'], 'number'],
            [['payment_time', 'date_added', 'date_modified', 'shipping_time', 'confirm_receipt_time'], 'safe'],
            [['invoice_prefix', 'firstname', 'lastname', 'telephone', 'fax', 'payment_firstname', 'payment_lastname', 'shipping_firstname', 'shipping_lastname', 'payment_telephone', 'shipping_telephone', 'transaction_no', 'billing_order_status', 'wangdian_new_order_code'], 'string', 'max' => 32],
            [['store_name', 'tracking'], 'string', 'max' => 64],
            [['store_url', 'user_agent', 'accept_language', 'shipping_rating_comment'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 96],
            [['payment_company', 'shipping_company', 'ip', 'forwarded_ip'], 'string', 'max' => 40],
            [['payment_address_1', 'payment_address_2', 'payment_city', 'payment_country', 'payment_zone', 'payment_method', 'payment_code', 'shipping_address_1', 'shipping_address_2', 'shipping_city', 'shipping_country', 'shipping_zone', 'shipping_method', 'shipping_code'], 'string', 'max' => 128],
            [['payment_postcode', 'shipping_postcode'], 'string', 'max' => 10],
            [['currency_code'], 'string', 'max' => 3],
            [['source', 'shopping_area', 'cutoff_date', 'shipping_id_card_type'], 'string', 'max' => 20],
            [['shipping_rating_synced'], 'string', 'max' => 1],
            [['shipping_id_card_number'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'pay_id' => 'Pay ID',
            'point_id' => 'Point ID',
            'use_point_id' => 'Use Point ID',
            'invoice_no' => 'Invoice No',
            'invoice_prefix' => 'Invoice Prefix',
            'store_id' => 'Store ID',
            'store_name' => 'Store Name',
            'store_url' => 'Store Url',
            'customer_id' => 'Customer ID',
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
            'payment_code' => 'Payment Code',
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
