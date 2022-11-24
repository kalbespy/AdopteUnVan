<?php

namespace App\Controller;

class ResultsController extends AbstractController
{
    /**
     * Display home page
     */
    public function index(): string
    {
        return $this->twig->render('Results/results.html.twig');
    }
}
