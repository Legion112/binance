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
    /**
     * @return BalanceInterface[]
     * @throws \Exception
     */
    public function balances(): array;
}