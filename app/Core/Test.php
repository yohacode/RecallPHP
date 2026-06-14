<?php

namespace App\Core;

use App\Contract\TestInterface;

class Test implements TestInterface
{
    // const A = "Const From Aman";
    public string $test = 'null';


    public static function hello(string $name) : string
    {
        return "Tester... $name";
    }

    
    public static function greet ( string $name) : string|null 
    {
        return null;
    } 
}