<?php

namespace app\components\exchanges;

use Binance\API;
use yii\base\Configurable;

class Binance extends API implements ExchangeInterface, Configurable
{
    public function __construct(array $config = [])
    {
        parent::__construct($config['api_key'], $config['api_secret']);
        $this->caOverride = true;
    }

    public function prices(): array
    {
        $prices = [];
        foreach (parent::prices() as $symbol => $price) {
            $prices[] = ['symbol' => $symbol, 'price' => $price];
        }
        return $prices;
    }

    public function price(string $symbol): float
    {
        return parent::price($symbol);
    }
}