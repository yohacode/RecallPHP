<?php

use App\Core\App;
use App\Core\Test;

include_once __DIR__ . "/../vendor/autoload.php";


dd(App::hello("Nati"), App::hello("Aman!!!!"), Test::greet("John Joe."));
