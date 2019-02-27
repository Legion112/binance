<?php

use app\components\exchanges\BalanceInterface;

/**
 * @var $this yii\web\View
 * @var $balances BalanceInterface[];
 */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <?= \yii\grid\GridView::widget([
                    'dataProvider' => new \yii\data\ArrayDataProvider([
                        'allModels' => $balances,
                        'pagination' => [
                            'pageSize' => 25,
                        ],
                    ]),
                    'columns' => [
                        [
                            'label' => 'Валюта',
                            'value' => function (BalanceInterface $balance) {
                                return $balance->getSymbol();
                            }

                        ],
                        [
                            'label' => 'Остаток',
                            'value' => function (BalanceInterface $balance) {
                                return $balance->getValue();
                            }

                        ],
                    ]
                ]) ?>
            </div>
        </div>

    </div>
</div>
