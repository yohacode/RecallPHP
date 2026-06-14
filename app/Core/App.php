<?php 

namespace App\Core;

use App\Attribute\Route;
use ReflectionClass;


class App 
{

    // const A = "Const From Aman IPQC.";

    public string $test = 'This is string from App class.';

    public static function hello(string $name): string
    {
        return "Hello World {$name}.";
    }

    public function processReflaction()
    {
        $classes = get_declared_classes();


        foreach ($classes as $className) {
            $reflection = new ReflectionClass($className);
            $routes = [];

            foreach ($reflection->getAttributes() as $attribute) {
                // if ($attribute->getName() === Route::class) {
                    $routes[$className] = $attribute;
                // }
            }

            return $routes;
        }
    }

    public static function greet ( string $name) : string|null 
    {
        return "Hello {$name}";
    } 

    public function display () : void
    {
        print_r();
    }

}