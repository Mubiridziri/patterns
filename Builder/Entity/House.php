<?php
/**
 * @project Patterns
 * @author Yury Potapov on 17.10.2020.
 */

namespace App\Entity;


class House
{
    private $hasWalls;

    private $hasDoors;

    private $hasWindows;

    private $hasPool;

    private $hasGarage;

    /**
     * @return mixed
     */
    public function getHasWalls()
    {
        return $this->hasWalls;
    }

    /**
     * @param mixed $hasWalls
     */
    public function setHasWalls($hasWalls)
    {
        $this->hasWalls = $hasWalls;
    }

    /**
     * @return mixed
     */
    public function getHasDoors()
    {
        return $this->hasDoors;
    }

    /**
     * @param mixed $hasDoors
     */
    public function setHasDoors($hasDoors)
    {
        $this->hasDoors = $hasDoors;
    }

    /**
     * @return mixed
     */
    public function getHasWindows()
    {
        return $this->hasWindows;
    }

    /**
     * @param mixed $hasWindows
     */
    public function setHasWindows($hasWindows)
    {
        $this->hasWindows = $hasWindows;
    }

    /**
     * @return mixed
     */
    public function getHasPool()
    {
        return $this->hasPool;
    }

    /**
     * @param mixed $hasPool
     */
    public function setHasPool($hasPool)
    {
        $this->hasPool = $hasPool;
    }

    /**
     * @return mixed
     */
    public function getHasGarage()
    {
        return $this->hasGarage;
    }

    /**
     * @param mixed $hasGarage
     */
    public function setHasGarage($hasGarage)
    {
        $this->hasGarage = $hasGarage;
    }
}