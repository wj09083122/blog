<?php
/* @var $this yii\web\View */
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'pay list';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title); ?></h1>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($searchModel, 'order_status_id')->dropDownList(ArrayHelper::map($orderStatuses, 'order_status_id', 'name')) ?>
<?php ActiveForm::end(); ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        'pay_id',
        'module',
        [
            'label'=>'order',
            'attribute'=>'order',
            'value'=>'text'
        ],
        'identifier',
        'customer_id',
        'payment_code',
        'amount',
        'should_pay',
        'transaction_id',
        'deposit_bank',
        'receipt_code',
        'created_at',
        'last_payment_time',
        'status',
        'check_status',
        'currency',
    ],
]); ?>