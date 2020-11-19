<?php

namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;

/**
 *
 */
class WeatherManager
{
    public function selectTown()
    {
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            'http://api.weatherstack.com/current?access_key=0a594b3c9858e1537eaaf10257e03eae&query=Paris'
        );

        $statusCode = $response->getStatusCode(); // get Response status code 200

        if ($statusCode === 200) {
            $content = $response->getContent();
            // get the response in JSON format

            $content = $response->toArray();
            // convert the response (here in JSON) to an PHP array

            return $content;
        }
    }
}
