<?php

namespace App\Controller;

class TravelController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function travel()
    {
        return $this->twig->render('Travel/travel.html.twig');
    }
}
