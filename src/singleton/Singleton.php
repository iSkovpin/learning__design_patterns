<?php

namespace app\singleton;

class Singleton
{
    private static ?Singleton $instance = null;

    /**
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        if (static::$instance === null) {
            static::$instance = new Singleton();
        }

        return static::$instance;
    }

    /*
     * Instance creation out of the class is denied.
     */

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}
