<?php

namespace Strategy;


use Composite\Composite;
use Exception;
use Sum\Sum;

class Strategy
{
    const SUM = 1;
    const COMPOSITE = 2;


    public $result;

    public function __construct($method, $args)
    {
        if ($method == self::SUM) {
            $result       = new Sum($args);
            $this->result = $result->getResult();
        } elseif ($method == self::COMPOSITE) {
            $result       = new Composite($args);
            $this->result = $result->getResult();
        } else {
            try {
                $msg = 'Not correct method : '."$method".' in class Strategy';
                throw new Exception($msg);
            } catch (Exception $exceptionMsg) {
                echo $exceptionMsg;
            }
        }
    }

}