<?php
/**
 * @project Patterns
 * @author Yury Potapov on 17.10.2020.
 */

namespace App\Builder;


use App\Entity\House;

class CottageBuilder implements Builder
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
        $this->house->setHasWalls(8);
    }

    public function buildDoors()
    {
       $this->house->setHasDoors(3);
    }

    public function buildWindows()
    {
        $this->house->setHasWindows(4);
    }

    public function buildPool()
    {
        $this->house->setHasPool(true);
    }

    public function buildGarage()
    {
        $this->house->setHasGarage(1);
    }

    public function getResult(): House
    {
       return $this->house;
    }
}