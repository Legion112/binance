<?php

namespace app\components\exchanges;

class Binance implements ExchangeInterface
{
    /**
     * @var \Binance\API
     */
    private $api;

    public function __construct(\Binance\API $api)
    {
        $this->api = $api;
    }

    public function balances(): array
    {
        $ticker = $this->api->prices(); // Make sure you have an updated ticker object for this to work
        $balances = [];
        foreach ($this->api->balances($ticker) as $symbol => $data) {
            $balances[] = new Balance($symbol, $data['available']);
        }

        return $balances;
    }
}