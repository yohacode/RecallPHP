<?php

namespace App\Contract;

use App\Core\App;


interface TestInterface
{
    /**
     * Trying Const in PHP interface
     * forbiden after PHP 8.0.0.1 ( I Think! )
     */
    // const A = "Test const";

    /***
     * Testing Interface new feature properties in interface
     */
    public string $test {get; set;}

    public string $p_name {set;}

    public static function greet ( string $name ): string|null;

    /**
     * @author yoha
     * @descritption: this ust Pratice purpose method
     */
    public static function hello(string $name): string;

    /**
     * @proprties void $any
     */
    public function display(): void;

    /**
     * Method which returns App Class
     */
    public function App() : App;
}