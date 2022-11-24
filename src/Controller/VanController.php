<?php

namespace App\Controller;

class VanController extends AbstractController
{
    /**
     * Display result
     */

    public function index(): string
    {
        return $this->twig->render('Result/result.html.twig');
    }
}
