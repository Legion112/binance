<?php

namespace app\controllers;

use app\components\Market;
use yii\base\Module;
use yii\web\Controller;

class SiteController extends Controller
{
    /**
     * @var Market
     */
    private $market;

    public function __construct(string $id, Module $module, Market $market, array $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->market = $market;
    }

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
        $exchange = $this->market->getExchange('BINANCE');

        $balances = $exchange->balances();

        return $this->render('index', [
            'balances' => $balances,
        ]);
    }
}
