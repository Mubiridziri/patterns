<?php
/**
 * @project Patterns
 * @author Yury Potapov on 17.10.2020.
 */

namespace App\Builder;


use App\Entity\House;

class HouseBuilder implements Builder
{
    /**
     * @var House
     */
    private $house;

    public function reset()
    {
        $this->house = new House();
    }

    public function buildWall()
    {
        $this->house->setHasWalls(4);
    }

    public function buildDoors()
    {
       $this->house->setHasDoors(1);
    }

    public function buildWindows()
    {
        $this->house->setHasWindows(2);
    }

    public function buildPool()
    {
        $this->house->setHasPool(false);
    }

    public function buildGarage()
    {
        $this->house->setHasGarage(0);
    }

    public function getResult(): House
    {
       return $this->house;
    }
}