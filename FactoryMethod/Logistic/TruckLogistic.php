<?php
/**
 * @project Patterns
 * @author Yury Potapov on 17.10.2020.
 */

namespace App\Logistic;


use App\Transport\Truck;

class TruckLogistic extends Logistic
{
    public function toCreateTransport()
    {
       return new Truck();
    }
}