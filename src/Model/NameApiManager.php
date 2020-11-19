<?php

namespace App\Model;
use Symfony\Component\HttpClient\HttpClient;

/**
 *
 */
class NameApiManager
{

    public function selectAll(): array
    {
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://path/to/api');

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
