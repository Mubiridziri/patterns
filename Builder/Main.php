<?php

use App\Builder\CottageBuilder;
use App\Builder\HouseBuilder;
use App\Director\Director;

/**
 * @project Patterns
 * @author Yury Potapov on 17.10.2020.
 */

class Main
{
 public function __construct()
 {
     $director = new Director(new HouseBuilder());
     $director->make();

     $cottageDirector = new Director(new CottageBuilder());
     $cottageDirector->make(Director::HOUSE_WITH_POOL_AND_GARAGE);
 }
}