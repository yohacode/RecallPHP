<?php

namespace App\Controller;

use App\Attribute\Route;


class HomeController {
    #[Route('/home')]
    public function index() : string {
        return 'index';
    }

    #[Route('/other')]
    public function other() : void {
        echo "Other";
    }
}