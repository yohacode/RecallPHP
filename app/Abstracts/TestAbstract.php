<?php

namespace App\Abstracts;

use App\Contract\TestInterface;

abstract class TestAbstract implements TestInterface 
{
    public function display() : void
    {
        echo "This is no nothing. but its void. no return.";
    }
}