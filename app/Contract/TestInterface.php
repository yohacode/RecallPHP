<?php

namespace App\Contract;


interface TestInterface
{
    /**
     * Trying 
     */

    /***
     * Testing Interface new feature properties in interface
     */
    public string $test {get; set;}

    /**
     * @author yoha
     * @descritption: this ust Pratice purpose method
     */
    public static function hello(string $name): string;
}