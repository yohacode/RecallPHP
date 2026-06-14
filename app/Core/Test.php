<?php

namespace App\Core;

use App\Contract\TestInterface;

class Test implements TestInterface
{
    public static function hello(string $name) : string
    {
        return "Tester... $name";
    }
}