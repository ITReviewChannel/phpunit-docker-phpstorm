<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @param int $result
     * @param int $firstTerm
     * @param int $secondTerm
     *
     * @dataProvider dataTestSumProvider
     */
    public function testSum(int $result, int $firstTerm, int $secondTerm)
    {
        $this->assertEquals($result, (new \App\Calculator())->sum($firstTerm, $secondTerm));
    }

    /**
     * @return int[][]
     */
    public function dataTestSumProvider(): array
    {
        return [
            'first assert' => [5, 2, 3],
            'second assert' => [100, 1, 99],
            'third assert' => [1, 0, 1],
        ];
    }
}