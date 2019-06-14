<?php
namespace backend\widgets;

use yii\base\Widget;
use Yii;
use yii\helpers\Url;

class LeftMenu extends Widget
{
    public function run()
    {
        return $this->render('left-menu.php', [
            'home' => [
                'name' => Yii::t('left-menu', 'home'),
                'url' => Url::toRoute('site/index')
            ],
            'login' => [
                'name' => Yii::t('left-menu', 'login'),
                'url' => Url::toRoute('site/login')
            ],
            'pay' => [
                'name' => Yii::t('left-menu', 'pay'),
                'url' => Url::toRoute('pay/index')
            ]
        ]);
    }
}
