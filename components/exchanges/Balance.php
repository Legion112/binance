<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 26.02.2019
 * Time: 20:58
 */

namespace app\components\exchanges;


class Balance implements BalanceInterface
{
    /**
     * @var string
     */
    private $symbol;
    /**
     * @var float
     */
    private $value;

    public function __construct(string $symbol, float $value)
    {
        $this->symbol = $symbol;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

}