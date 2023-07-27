<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class MainController {

    #[Route('/')]
    public function test() {
        dd('Hello !');
    }
}