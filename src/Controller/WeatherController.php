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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $weatherManager = new WeatherManager();
            $city = $_POST['name'];
            $weather = $weatherManager->selectTown($city);
            $request = $weather['request'];
            $location = $weather['location'];
            $current = $weather['current'];
            $icone = $weather['current']['weather_icons'];
            return $this->twig->render('Weather/weather.html.twig',
            ['weather' => $weather, 'request' => $request, 'location' => $location, 'current' => $current, 'icone' => $icone]);
        }
        return $this->twig->render('Weather/weather.html.twig');
    }
}
