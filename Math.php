<?php

namespace Math;

use Strategy\Strategy;

class Math
{
    const SUM = 1;
    const COMPOSITE = 2;

    private $result;

    public function getSum(...$params)
    {
        $this->result = new Strategy(SUM, $params);

        return $this->result->result;
    }

    public function getComposite(...$params)
    {
        $this->result = new Strategy(COMPOSITE, $params);

        return $this->result->result;
    }
}