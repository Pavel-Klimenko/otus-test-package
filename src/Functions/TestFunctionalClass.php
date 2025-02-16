<?php declare(strict_types=1);

namespace Pavelklimenko\OtusTestPackage\Functions;

class TestFunctionalClass
{
    public function calculateSum(int $a, int $b): int
    {
        return $a + $b;
    }

    public function selectOperation($operation):string
     {
        $operation = match($operation)
        {
            'sum' => "сложение",
            'dist' => "вычитание",
            default => "действие по умолчанию",
        };
        return $operation;
    }
}