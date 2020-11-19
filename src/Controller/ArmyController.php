<?php

namespace App\Controller;

use App\Model\ArmyManager;

class ArmyController extends AbstractController
{
    public function list()
    {
        $armyManager = new ArmyManager();
        $units = $armyManager->selectAllUnits();

        $archer = $units['units'][0];
        $spearman = $units['units'][11];
        $pikeman = $units['units'][12];
        $champion = $units['units'][18];
        $petard = $units['units'][20];

        $units =
            [
                $archer,
                $spearman,
                $pikeman,
                $champion,
                $petard
            ];

        return $this->twig->render('Army/unity.html.twig', ['units' => $units]);
    }

    public function combat()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $archer = $_POST['archer'];
            $spearman = $_POST['spearman'];
            $pikeman = $_POST['pikeman'];
            $champion = $_POST['champion'];
            $petard = $_POST['petard'];
            $unities = [
                $archer,
                $spearman,
                $pikeman,
                $champion,
                $petard];
            return $unities;
        }
    }
}
