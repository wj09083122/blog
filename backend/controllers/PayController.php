<?php

namespace backend\controllers;

use backend\models\PaySearch;
use common\models\Order;
use common\models\OrderStatus;
use Yii;

class PayController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $orderStatuses = OrderStatus::find()->all();

        $searchModel = new PaySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'orderStatuses' => $orderStatuses,
        ]);
    }

}
