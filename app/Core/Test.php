<?php

namespace App\Core;

use App\Abstracts\TestAbstract;

class Test extends TestAbstract
{
    // const A = "Const From Aman";
    public string $test = 'null';

    public static function hello(string $name) : string
    {
        return "Tester... $name";
    }

    public static function greet ( string $name) : string|null 
    {
        return "Hello from TEST $name";
    } 
}