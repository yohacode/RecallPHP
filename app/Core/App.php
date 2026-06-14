<?php 

namespace App\Core;

use App\Attribute\Route;
use App\Contract\TestInterface;
use ReflectionClass;


class App implements TestInterface {

    public static function hello(string $name): string
    {
        return "Hello World {$name}.";
    }

    public function processReflaction()
    {
        $classes = get_declared_classes();

        // dd($classes);


        foreach ($classes as $className) {
            $reflection = new ReflectionClass($className);

            foreach ($reflection->getAttributes() as $attribute) {
                if ($attribute->getName() === Route::class) {
                    return $className;
                }
            }
        }
    }

}