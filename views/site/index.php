<?php

/**
 * @var $this yii\web\View
 * @var $exchange \app\components\exchanges\ExchangeInterface;
 */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <?= \yii\grid\GridView::widget([
                    'dataProvider' => new \yii\data\ArrayDataProvider([
                        'allModels' => $exchange->prices(),
                        'pagination' => [
                            'pageSize' => 25,
                        ],
                    ]),
                    'columns' => [
                        'symbol:text:Валюта',
                        'price:text:Доступный остаток',
                    ]
                ]) ?>
            </div>
        </div>

    </div>
</div>
