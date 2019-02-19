<?php

namespace app\components;

use app\components\exchanges\ExchangeInterface;

class Market implements \yii\base\Configurable
{
    /**
     * @var ExchangeInterface[]
     */
    private $exchanges;


    public function __construct(array $config = [])
    {
        foreach ($config['exchanges'] as $name => $options) {
            $this->exchanges[$name] = \Yii::createObject($options);
        }
    }

    public function getExchange(string $name): ExchangeInterface
    {
        return $this->exchanges[$name];
    }
}