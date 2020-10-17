<?php
/**
 * @project Patterns
 * @author Yury Potapov on 17.10.2020.
 */
namespace App\Products;

interface Chair
{
    public function hasLegs();

    public function sitOn();
}