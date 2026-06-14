<?php

$var = " This is Test Title 1<br>";

echo $var;

$tv = $var 
        |> trim(...)  // remove extra space
        |> (fn($str) => strtolower($str)) // String to lowercase
        |> (fn($str) => str_replace(' ', '-',$str)) // Replace empty space to - 
        |> (fn($str) => str_replace('1', "One.", $str)); // Replace 1 to word


echo $tv . "<br><br>";

function add(int $n1, int $n2): float // int equal to return type
{
    return (float)($n1 + $n2);
}

print (add(5,8));


class Test {
    private ?string $name = null;

    public function set(string $name)
    {
        $this->name = $name;
    }

    public function getter() 
    {
        return $this->set($name);
    }
}

echo "<br>";

$t = new Test('');

var_dump($t->getter('Joe Doe'));