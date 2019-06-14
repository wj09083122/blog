<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_id',
            'pay_id',
            'point_id',
            'use_point_id',
            'invoice_no',
            //'invoice_prefix',
            //'store_id',
            //'store_name',
            //'store_url:url',
            //'customer_id',
            //'customer_group_id',
            //'firstname',
            //'lastname',
            //'email:email',
            //'telephone',
            //'fax',
            //'custom_field:ntext',
            //'payment_firstname',
            //'payment_lastname',
            //'payment_company',
            //'payment_address_1',
            //'payment_address_2',
            //'payment_city',
            //'payment_postcode',
            //'payment_country',
            //'payment_country_id',
            //'payment_zone',
            //'payment_zone_id',
            //'payment_address_format:ntext',
            //'payment_custom_field:ntext',
            //'payment_method',
            //'payment_code',
            //'payment_point',
            //'payment_time',
            //'shipping_firstname',
            //'shipping_lastname',
            //'shipping_company',
            //'shipping_address_1',
            //'shipping_address_2',
            //'shipping_city',
            //'shipping_postcode',
            //'shipping_country',
            //'shipping_country_id',
            //'shipping_zone',
            //'shipping_zone_id',
            //'shipping_address_format:ntext',
            //'shipping_custom_field:ntext',
            //'shipping_method',
            //'shipping_code',
            //'comment:ntext',
            //'total',
            //'discount',
            //'order_status_id',
            //'affiliate_id',
            //'commission',
            //'marketing_id',
            //'tracking',
            //'language_id',
            //'currency_id',
            //'currency_code',
            //'currency_value',
            //'ip',
            //'source',
            //'forwarded_ip',
            //'shopping_area',
            //'tax_rate',
            //'exchange_rate',
            //'user_agent',
            //'accept_language',
            //'date_added',
            //'date_modified',
            //'cutoff_date',
            //'payment_telephone',
            //'shipping_telephone',
            //'shipping_time',
            //'confirm_receipt_time',
            //'transaction_no',
            //'billing_order_id',
            //'billing_order_status',
            //'shipping_rating',
            //'shipping_rating_comment',
            //'shipping_rating_synced',
            //'refund_id:ntext',
            //'cancel_reason_id',
            //'weight',
            //'weight_class_id',
            //'shipping_id_card_type',
            //'shipping_id_card_number',
            //'wangdian_new_order_code',
            //'wangdian_new_order_push_count',
            //'wangdian_new_order_response:ntext',
            //'wangdian_canceled',
            //'wangdian_cancel_order_push_count',
            //'wangdian_cancel_order_response:ntext',
            //'is_presale',
            //'customer_service_user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
