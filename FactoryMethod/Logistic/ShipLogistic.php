<?php
/**
 * @project Patterns
 * @author Yury Potapov on 17.10.2020.
 */

namespace App\Logistic;


use App\Transport\Ship;

class ShipLogistic extends Logistic
{

    public function toCreateTransport()
    {
        return new Ship();
    }
}