<?php

namespace App\Core;

use App\Abstracts\TestAbstract;

class Test extends TestAbstract
{
    // const A = "Const From Aman";
    public string $test = 'null';
    public string $p_name = "Private variable accessable only inside this class";


    public function __invoke () 
    {
        echo $p_name;
    }

    public static function hello(string $name) : string
    {
        return "Tester... $name";
    }

    public static function greet ( string $name) : string|null 
    {
        return "Hello from TEST $name";
    } 
}