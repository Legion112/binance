<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 19.02.2019
 * Time: 13:59
 */

namespace app\components\exchanges;


interface ExchangeInterface
{
    public function price(string $symbol): float;

    public function prices(): array;
}