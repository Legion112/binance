<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }


    public function actionIndex()
    {
        $exchange = Yii::$app->market->getExchange('binance');

        $balances = $exchange->balances();

        return $this->render('index', [
            'balances' => $balances,
        ]);
    }
}
