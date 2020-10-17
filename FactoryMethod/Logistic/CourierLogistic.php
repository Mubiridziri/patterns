<?php
/**
 * @project Patterns
 * @author Yury Potapov on 17.10.2020.
 */

namespace App\Logistic;


use App\Transport\Courier;

class CourierLogistic extends Logistic
{
    public function toCreateTransport()
    {
       return new Courier();
    }
}