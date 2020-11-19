<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use App\Model\WeatherManager;

class WeatherController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function weather()
    {
        $weatherManager = new WeatherManager();
        $weather = $weatherManager->selectTown();
        return $this->twig->render('Weather/weather.html.twig', ['weather' => $weather]);
    }
}
