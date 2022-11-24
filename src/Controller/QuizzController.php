<?php

namespace App\Controller;

class QuizzController extends AbstractController
{
    /**
     * Display home page
     */
    public function index(): string
    {
        return $this->twig->render('Quizz/quizz.html.twig');
    }
}
