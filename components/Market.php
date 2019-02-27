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
        foreach ($config['exchanges'] as $name => $className) {
            $this->exchanges[$name] = \Yii::createObject($className);
        }
    }

    public function getExchange(string $name): ExchangeInterface
    {
        return $this->exchanges[$name];
    }
}