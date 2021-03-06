<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use App\Model\NameApiManager;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        return $this->twig->render('Home/index.html.twig');
    }

    public function quote()
    {
        return $this->twig->render('Quote/index.html.twig');
    }

    public function weather()
    {
        return $this->twig->render('Weather/index.html.twig');
    }

    public function apiSelector()
    {
        return $this->twig->render('ApiSelector/apiSelector.html.twig');
    }
}
