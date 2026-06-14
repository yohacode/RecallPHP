<?php

namespace App\Abstracts;

use App\Contract\TestInterface;
use App\Core\App;

abstract class TestAbstract implements TestInterface 
{
    public function display() : void
    {
        echo "This is no nothing. but its void. no return.";
    }

    /**
     * @return App\Core\App;
     */
    public function App() : App
    {
        return new App();
    }
}