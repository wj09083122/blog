<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Order;

/**
 * Ordersearch represents the model behind the search form of `common\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'pay_id', 'point_id', 'use_point_id', 'invoice_no', 'store_id', 'customer_id', 'customer_group_id', 'payment_country_id', 'payment_zone_id', 'shipping_country_id', 'shipping_zone_id', 'order_status_id', 'affiliate_id', 'marketing_id', 'language_id', 'currency_id', 'billing_order_id', 'shipping_rating', 'cancel_reason_id', 'weight_class_id', 'wangdian_new_order_push_count', 'wangdian_canceled', 'wangdian_cancel_order_push_count', 'is_presale', 'customer_service_user_id'], 'integer'],
            [['invoice_prefix', 'store_name', 'store_url', 'firstname', 'lastname', 'email', 'telephone', 'fax', 'custom_field', 'payment_firstname', 'payment_lastname', 'payment_company', 'payment_address_1', 'payment_address_2', 'payment_city', 'payment_postcode', 'payment_country', 'payment_zone', 'payment_address_format', 'payment_custom_field', 'payment_method', 'payment_code', 'payment_time', 'shipping_firstname', 'shipping_lastname', 'shipping_company', 'shipping_address_1', 'shipping_address_2', 'shipping_city', 'shipping_postcode', 'shipping_country', 'shipping_zone', 'shipping_address_format', 'shipping_custom_field', 'shipping_method', 'shipping_code', 'comment', 'tracking', 'currency_code', 'ip', 'source', 'forwarded_ip', 'shopping_area', 'user_agent', 'accept_language', 'date_added', 'date_modified', 'cutoff_date', 'payment_telephone', 'shipping_telephone', 'shipping_time', 'confirm_receipt_time', 'transaction_no', 'billing_order_status', 'shipping_rating_comment', 'shipping_rating_synced', 'refund_id', 'shipping_id_card_type', 'shipping_id_card_number', 'wangdian_new_order_code', 'wangdian_new_order_response', 'wangdian_cancel_order_response'], 'safe'],
            [['payment_point', 'total', 'discount', 'commission', 'currency_value', 'tax_rate', 'exchange_rate', 'weight'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Order::find();

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
            'order_id' => $this->order_id,
            'pay_id' => $this->pay_id,
            'point_id' => $this->point_id,
            'use_point_id' => $this->use_point_id,
            'invoice_no' => $this->invoice_no,
            'store_id' => $this->store_id,
            'customer_id' => $this->customer_id,
            'customer_group_id' => $this->customer_group_id,
            'payment_country_id' => $this->payment_country_id,
            'payment_zone_id' => $this->payment_zone_id,
            'payment_point' => $this->payment_point,
            'payment_time' => $this->payment_time,
            'shipping_country_id' => $this->shipping_country_id,
            'shipping_zone_id' => $this->shipping_zone_id,
            'total' => $this->total,
            'discount' => $this->discount,
            'order_status_id' => $this->order_status_id,
            'affiliate_id' => $this->affiliate_id,
            'commission' => $this->commission,
            'marketing_id' => $this->marketing_id,
            'language_id' => $this->language_id,
            'currency_id' => $this->currency_id,
            'currency_value' => $this->currency_value,
            'tax_rate' => $this->tax_rate,
            'exchange_rate' => $this->exchange_rate,
            'date_added' => $this->date_added,
            'date_modified' => $this->date_modified,
            'shipping_time' => $this->shipping_time,
            'confirm_receipt_time' => $this->confirm_receipt_time,
            'billing_order_id' => $this->billing_order_id,
            'shipping_rating' => $this->shipping_rating,
            'cancel_reason_id' => $this->cancel_reason_id,
            'weight' => $this->weight,
            'weight_class_id' => $this->weight_class_id,
            'wangdian_new_order_push_count' => $this->wangdian_new_order_push_count,
            'wangdian_canceled' => $this->wangdian_canceled,
            'wangdian_cancel_order_push_count' => $this->wangdian_cancel_order_push_count,
            'is_presale' => $this->is_presale,
            'customer_service_user_id' => $this->customer_service_user_id,
        ]);

        $query->andFilterWhere(['like', 'invoice_prefix', $this->invoice_prefix])
            ->andFilterWhere(['like', 'store_name', $this->store_name])
            ->andFilterWhere(['like', 'store_url', $this->store_url])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'telephone', $this->telephone])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'custom_field', $this->custom_field])
            ->andFilterWhere(['like', 'payment_firstname', $this->payment_firstname])
            ->andFilterWhere(['like', 'payment_lastname', $this->payment_lastname])
            ->andFilterWhere(['like', 'payment_company', $this->payment_company])
            ->andFilterWhere(['like', 'payment_address_1', $this->payment_address_1])
            ->andFilterWhere(['like', 'payment_address_2', $this->payment_address_2])
            ->andFilterWhere(['like', 'payment_city', $this->payment_city])
            ->andFilterWhere(['like', 'payment_postcode', $this->payment_postcode])
            ->andFilterWhere(['like', 'payment_country', $this->payment_country])
            ->andFilterWhere(['like', 'payment_zone', $this->payment_zone])
            ->andFilterWhere(['like', 'payment_address_format', $this->payment_address_format])
            ->andFilterWhere(['like', 'payment_custom_field', $this->payment_custom_field])
            ->andFilterWhere(['like', 'payment_method', $this->payment_method])
            ->andFilterWhere(['like', 'payment_code', $this->payment_code])
            ->andFilterWhere(['like', 'shipping_firstname', $this->shipping_firstname])
            ->andFilterWhere(['like', 'shipping_lastname', $this->shipping_lastname])
            ->andFilterWhere(['like', 'shipping_company', $this->shipping_company])
            ->andFilterWhere(['like', 'shipping_address_1', $this->shipping_address_1])
            ->andFilterWhere(['like', 'shipping_address_2', $this->shipping_address_2])
            ->andFilterWhere(['like', 'shipping_city', $this->shipping_city])
            ->andFilterWhere(['like', 'shipping_postcode', $this->shipping_postcode])
            ->andFilterWhere(['like', 'shipping_country', $this->shipping_country])
            ->andFilterWhere(['like', 'shipping_zone', $this->shipping_zone])
            ->andFilterWhere(['like', 'shipping_address_format', $this->shipping_address_format])
            ->andFilterWhere(['like', 'shipping_custom_field', $this->shipping_custom_field])
            ->andFilterWhere(['like', 'shipping_method', $this->shipping_method])
            ->andFilterWhere(['like', 'shipping_code', $this->shipping_code])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'tracking', $this->tracking])
            ->andFilterWhere(['like', 'currency_code', $this->currency_code])
            ->andFilterWhere(['like', 'ip', $this->ip])
            ->andFilterWhere(['like', 'source', $this->source])
            ->andFilterWhere(['like', 'forwarded_ip', $this->forwarded_ip])
            ->andFilterWhere(['like', 'shopping_area', $this->shopping_area])
            ->andFilterWhere(['like', 'user_agent', $this->user_agent])
            ->andFilterWhere(['like', 'accept_language', $this->accept_language])
            ->andFilterWhere(['like', 'cutoff_date', $this->cutoff_date])
            ->andFilterWhere(['like', 'payment_telephone', $this->payment_telephone])
            ->andFilterWhere(['like', 'shipping_telephone', $this->shipping_telephone])
            ->andFilterWhere(['like', 'transaction_no', $this->transaction_no])
            ->andFilterWhere(['like', 'billing_order_status', $this->billing_order_status])
            ->andFilterWhere(['like', 'shipping_rating_comment', $this->shipping_rating_comment])
            ->andFilterWhere(['like', 'shipping_rating_synced', $this->shipping_rating_synced])
            ->andFilterWhere(['like', 'refund_id', $this->refund_id])
            ->andFilterWhere(['like', 'shipping_id_card_type', $this->shipping_id_card_type])
            ->andFilterWhere(['like', 'shipping_id_card_number', $this->shipping_id_card_number])
            ->andFilterWhere(['like', 'wangdian_new_order_code', $this->wangdian_new_order_code])
            ->andFilterWhere(['like', 'wangdian_new_order_response', $this->wangdian_new_order_response])
            ->andFilterWhere(['like', 'wangdian_cancel_order_response', $this->wangdian_cancel_order_response]);

        return $dataProvider;
    }
}
