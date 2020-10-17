<?php
/**
 * @project Patterns
 * @author Yury Potapov on 17.10.2020.
 */

namespace App\Singleton;


class Database
{
    /**
     * @var Database
     */
    private static $instance;

    /**
     * @return Database
     */
    public static function getInstance(): Database
    {
        if(self::$instance === null)
            self::$instance = new Database();
        return self::$instance;
    }
}