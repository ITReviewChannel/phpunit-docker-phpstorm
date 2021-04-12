<?php

namespace App;

/**
 * Калькулятор.
 *
 * @package App
 */
final class Calculator
{
    /**
     * Расчет суммы двух чисел.
     *
     * @param int $firstTerm
     * @param int $secondTerm
     * @return int
     */
    public function sum(int $firstTerm, int $secondTerm): int
    {
        return $firstTerm + $secondTerm;
    }
}
