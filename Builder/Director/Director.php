<?php
/**
 * @project Patterns
 * @author Yury Potapov on 17.10.2020.
 */

namespace App\Director;


use App\Builder\Builder;

class Director
{
    const DEFAULT_HOUSE_TYPE = 'basic';
    const HOUSE_WITH_POOL = 'with_pool';
    const HOUSE_WITH_GARAGE = 'with_garage';
    const HOUSE_WITH_POOL_AND_GARAGE = 'with_pool_and_garage';

    /**
     * @var Builder
     */
    private $builder;


    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @param mixed $builder
     */
    public function setBuilder($builder)
    {
        $this->builder = $builder;
    }

    public function make(string $type = self::DEFAULT_HOUSE_TYPE)
    {
        $this->builder->reset();
        $this->builder->buildWall();
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        switch ($type) {
            case self::HOUSE_WITH_GARAGE:
                $this->builder->buildGarage();
                break;
            case self::HOUSE_WITH_POOL:
                $this->builder->buildPool();
                break;
            case self::HOUSE_WITH_POOL_AND_GARAGE:
                $this->builder->buildGarage();
                $this->builder->buildPool();
                break;
            default:
                break;
        }
        return $this->builder->getResult();
    }
}