<?php
/**
 * @project Patterns
 * @author Yury Potapov on 17.10.2020.
 */

namespace App\Furniture;


use App\Products\Chair;
use App\Products\Sofa;
use App\Products\Table;
use App\Products\VicrorianTable;
use App\Products\VicrotianSofa;
use App\Products\VictorianChair;

class VictorianFurnitureFactory implements FurnitureFactory
{

    public function createChair(): Chair
    {
        return new VictorianChair();
    }

    public function createTable(): Table
    {
        return new VicrorianTable();
    }

    public function createSofa(): Sofa
    {
        return new VicrotianSofa();
    }
}