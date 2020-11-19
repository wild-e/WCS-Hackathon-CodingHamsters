<?php

namespace App\Controller;

use App\Model\ArmyManager;

class ArmyController extends AbstractController
{
    public function list()
    {
        $armyManager = new ArmyManager();
        $unities = $armyManager->selectAllUnities();

        return $this->twig->render('Army/unity.html.twig', ['unities' => $unities]);
    }
}
