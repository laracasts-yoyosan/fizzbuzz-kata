<?php

namespace Acme;

class Fizzbuzz
{
    public function execute($number)
    {
        if ($number % 15 == 0) {
            return 'fizzbuzz';
        }

        if ($number % 3 === 0) {
            return 'fizz';
        }

        if ($number % 5 == 0) {
            return 'buzz';
        }

        return $number;
    }

    public function executeUpTo($number)
    {
        $result = [];
        foreach (range(1, $number) as $i) {
            $result[] = $this->execute($i);
        }

        return $result;
    }
}
