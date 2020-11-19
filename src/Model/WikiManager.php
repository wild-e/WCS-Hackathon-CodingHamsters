<?php

namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;

class WikiManager
{
    public function searchFor(string $input)
    {
        $client = HttpClient::create();
        $response = $client->request('GET', 
        'https://en.wikipedia.org/w/api.php?action=query&format=json&list=search&srsearch='.$input);

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
