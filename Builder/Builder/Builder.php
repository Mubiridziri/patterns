<?php
/**
 * @project Patterns
 * @author Yury Potapov on 17.10.2020.
 */

namespace App\Builder;


use App\Entity\House;

interface Builder
{
    public function reset();

    public function buildWall();

    public function buildDoors();

    public function buildWindows(); //bad idea, Billy

    public function buildPool();

    public function buildGarage();

    public function getResult() : House;
}