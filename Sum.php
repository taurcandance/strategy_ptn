<?php

namespace Sum;


class Sum
{
    private $result;

    public function __construct($someArgs)
    {
        self::returnResult($someArgs);
    }

    public function returnResult($args)
    {
        $var          = array_sum($args);
        $this->result = $var;
    }

    public function getResult()
    {
        return $this->result;
    }
}
