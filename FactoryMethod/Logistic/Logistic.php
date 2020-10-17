<?php
/**
 * @project Patterns
 * @author Yury Potapov on 17.10.2020.
 */

namespace App\Logistic;


use App\Transport\Transport;

abstract class Logistic
{
    /**
     * @var Transport $transport
     */
    private $transport;

     public function getPlanDelivery()
     {
        $this->transport = $this->toCreateTransport();
     }

     abstract public function toCreateTransport();

    /**
     * @return mixed
     */
    public function getTransport()
    {
        return $this->transport;
    }
}