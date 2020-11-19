<?php

namespace App\Controller;

use App\Model\QuoteManager;

class QuoteController extends AbstractController
{
    public function list()
    {
        $quoteManager = new QuoteManager();
        $quotes = $quoteManager->selectAll();

        var_dump($quotes);

        return $this->twig->render('Quote/index.html.twig', ['quotes' => $quotes]);
    }
}
