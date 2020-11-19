<?php


namespace App\Controller;

use App\Model\WikiManager;

class WikiController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function wiki()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {

        $wikiManager = new WikiManager();
        $searchResults = $wikiManager->searchFor($_POST['search']);
        return $this->twig->render('Wiki/wiki.html.twig', ['searchResult' => $searchResults]);

        }
        return $this->twig->render('Wiki/wiki.html.twig');
    }
}
