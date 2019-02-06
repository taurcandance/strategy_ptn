<?php

namespace Composite;


class Composite
{
    private $result;

    public function __construct(array $someArgs)
    {
        $this->result = self::composite($someArgs);
    }

    private function composite(array $args)
    {
        $composite = 1;
        foreach ($args as $item) {
            $composite *= $item;
        }

        return $composite;
    }

    public function getResult()
    {
        return $this->result;
    }
}