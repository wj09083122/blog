<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'order_id') ?>

    <?= $form->field($model, 'pay_id') ?>

    <?= $form->field($model, 'point_id') ?>

    <?= $form->field($model, 'use_point_id') ?>

    <?= $form->field($model, 'invoice_no') ?>

    <?php // echo $form->field($model, 'invoice_prefix') ?>

    <?php // echo $form->field($model, 'store_id') ?>

    <?php // echo $form->field($model, 'store_name') ?>

    <?php // echo $form->field($model, 'store_url') ?>

    <?php // echo $form->field($model, 'customer_id') ?>

    <?php // echo $form->field($model, 'customer_group_id') ?>

    <?php // echo $form->field($model, 'firstname') ?>

    <?php // echo $form->field($model, 'lastname') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'telephone') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'custom_field') ?>

    <?php // echo $form->field($model, 'payment_firstname') ?>

    <?php // echo $form->field($model, 'payment_lastname') ?>

    <?php // echo $form->field($model, 'payment_company') ?>

    <?php // echo $form->field($model, 'payment_address_1') ?>

    <?php // echo $form->field($model, 'payment_address_2') ?>

    <?php // echo $form->field($model, 'payment_city') ?>

    <?php // echo $form->field($model, 'payment_postcode') ?>

    <?php // echo $form->field($model, 'payment_country') ?>

    <?php // echo $form->field($model, 'payment_country_id') ?>

    <?php // echo $form->field($model, 'payment_zone') ?>

    <?php // echo $form->field($model, 'payment_zone_id') ?>

    <?php // echo $form->field($model, 'payment_address_format') ?>

    <?php // echo $form->field($model, 'payment_custom_field') ?>

    <?php // echo $form->field($model, 'payment_method') ?>

    <?php // echo $form->field($model, 'payment_code') ?>

    <?php // echo $form->field($model, 'payment_point') ?>

    <?php // echo $form->field($model, 'payment_time') ?>

    <?php // echo $form->field($model, 'shipping_firstname') ?>

    <?php // echo $form->field($model, 'shipping_lastname') ?>

    <?php // echo $form->field($model, 'shipping_company') ?>

    <?php // echo $form->field($model, 'shipping_address_1') ?>

    <?php // echo $form->field($model, 'shipping_address_2') ?>

    <?php // echo $form->field($model, 'shipping_city') ?>

    <?php // echo $form->field($model, 'shipping_postcode') ?>

    <?php // echo $form->field($model, 'shipping_country') ?>

    <?php // echo $form->field($model, 'shipping_country_id') ?>

    <?php // echo $form->field($model, 'shipping_zone') ?>

    <?php // echo $form->field($model, 'shipping_zone_id') ?>

    <?php // echo $form->field($model, 'shipping_address_format') ?>

    <?php // echo $form->field($model, 'shipping_custom_field') ?>

    <?php // echo $form->field($model, 'shipping_method') ?>

    <?php // echo $form->field($model, 'shipping_code') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'discount') ?>

    <?php // echo $form->field($model, 'order_status_id') ?>

    <?php // echo $form->field($model, 'affiliate_id') ?>

    <?php // echo $form->field($model, 'commission') ?>

    <?php // echo $form->field($model, 'marketing_id') ?>

    <?php // echo $form->field($model, 'tracking') ?>

    <?php // echo $form->field($model, 'language_id') ?>

    <?php // echo $form->field($model, 'currency_id') ?>

    <?php // echo $form->field($model, 'currency_code') ?>

    <?php // echo $form->field($model, 'currency_value') ?>

    <?php // echo $form->field($model, 'ip') ?>

    <?php // echo $form->field($model, 'source') ?>

    <?php // echo $form->field($model, 'forwarded_ip') ?>

    <?php // echo $form->field($model, 'shopping_area') ?>

    <?php // echo $form->field($model, 'tax_rate') ?>

    <?php // echo $form->field($model, 'exchange_rate') ?>

    <?php // echo $form->field($model, 'user_agent') ?>

    <?php // echo $form->field($model, 'accept_language') ?>

    <?php // echo $form->field($model, 'date_added') ?>

    <?php // echo $form->field($model, 'date_modified') ?>

    <?php // echo $form->field($model, 'cutoff_date') ?>

    <?php // echo $form->field($model, 'payment_telephone') ?>

    <?php // echo $form->field($model, 'shipping_telephone') ?>

    <?php // echo $form->field($model, 'shipping_time') ?>

    <?php // echo $form->field($model, 'confirm_receipt_time') ?>

    <?php // echo $form->field($model, 'transaction_no') ?>

    <?php // echo $form->field($model, 'billing_order_id') ?>

    <?php // echo $form->field($model, 'billing_order_status') ?>

    <?php // echo $form->field($model, 'shipping_rating') ?>

    <?php // echo $form->field($model, 'shipping_rating_comment') ?>

    <?php // echo $form->field($model, 'shipping_rating_synced') ?>

    <?php // echo $form->field($model, 'refund_id') ?>

    <?php // echo $form->field($model, 'cancel_reason_id') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'weight_class_id') ?>

    <?php // echo $form->field($model, 'shipping_id_card_type') ?>

    <?php // echo $form->field($model, 'shipping_id_card_number') ?>

    <?php // echo $form->field($model, 'wangdian_new_order_code') ?>

    <?php // echo $form->field($model, 'wangdian_new_order_push_count') ?>

    <?php // echo $form->field($model, 'wangdian_new_order_response') ?>

    <?php // echo $form->field($model, 'wangdian_canceled') ?>

    <?php // echo $form->field($model, 'wangdian_cancel_order_push_count') ?>

    <?php // echo $form->field($model, 'wangdian_cancel_order_response') ?>

    <?php // echo $form->field($model, 'is_presale') ?>

    <?php // echo $form->field($model, 'customer_service_user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
