<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 26.02.2019
 * Time: 20:56
 */

namespace app\components\exchanges;


interface BalanceInterface
{
    public function getSymbol(): string;

    public function getValue(): float;
}