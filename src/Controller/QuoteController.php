<?php

namespace App\Controller;

use App\Model\QuoteManager;

class QuoteController extends AbstractController
{
    public function list()
    {
        $quoteManager = new QuoteManager();
        $quotes = $quoteManager->selectAllAction();

        $quote = $quotes['quotes'];
        $randKeys = array_rand($quote, 1);

        return $this->twig->render('Quote/index.html.twig', ['quote' => $quote[$randKeys]]);
    }
}
