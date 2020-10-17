<?php
/**
 * @project Patterns
 * @author Yury Potapov on 17.10.2020.
 */

namespace App\Furniture;


use App\Products\Chair;
use App\Products\Sofa;
use App\Products\Table;

interface FurnitureFactory
{
    public function createChair() :Chair;

    public function createTable() :Table;

    public function createSofa() :Sofa;
}