<?php
/**
 * @project Patterns
 * @author Yury Potapov on 17.10.2020.
 */

namespace App\Furniture;


use App\Products\Chair;
use App\Products\ModernChair;
use App\Products\ModernSofa;
use App\Products\ModernTable;
use App\Products\Sofa;
use App\Products\Table;

class ModernFurnitureFactory implements FurnitureFactory
{

    public function createChair(): Chair
    {
        return new ModernChair();
    }

    public function createTable(): Table
    {
        return new ModernTable();
    }

    public function createSofa(): Sofa
    {
        return new ModernSofa();
    }
}