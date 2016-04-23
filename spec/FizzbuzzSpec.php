<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;

class FizzbuzzSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Acme\Fizzbuzz');
    }

    public function it_translates_1_for_fizzbuzz()
    {
        $this->execute(1)
            ->shouldReturn(1);
    }

    public function it_translates_2_for_fizzbuzz()
    {
        $this->execute(2)
            ->shouldReturn(2);
    }

    public function it_translates_3_for_fizzbuzz()
    {
        $this->execute(3)
            ->shouldReturn('fizz');
    }

    public function it_translates_5_for_fizzbuzz()
    {
        $this->execute(5)
            ->shouldReturn('buzz');
    }

    public function it_translates_6_for_fizzbuzz()
    {
        $this->execute(6)
            ->shouldReturn('fizz');
    }

    public function it_translates_15_for_fizzbuzz()
    {
        $this->execute(15)
            ->shouldReturn('fizzbuzz');
    }

    public function it_translates_123_for_fizzbuzz()
    {
        $this->execute(123)
            ->shouldReturn('fizz');
    }

    public function it_translates_a_sequence_of_numbers_for_fizzbuzz()
    {
        $this->executeUpTo(5)
            ->shouldReturn([1, 2, 'fizz', 4, 'buzz']);
    }

    public function it_translates_a_bigger_sequence_of_numbers_for_fizzbuzz()
    {
        $this->executeUpTo(10)
            ->shouldReturn([1, 2, 'fizz', 4, 'buzz', 'fizz', 7, 8, 'fizz', 'buzz']);
    }
}
