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
            $archer1 = $_POST['Archer1'];
            $spearman1 = $_POST['Spearman1'];
            $pikeman1 = $_POST['Pikeman1'];
            $champion1 = $_POST['Champion1'];
            $petard1 = $_POST['Petard1'];
            $archer2 = $_POST['Archer2'];
            $spearman2 = $_POST['Spearman2'];
            $pikeman2 = $_POST['Pikeman2'];
            $champion2 = $_POST['Champion2'];
            $petard2 = $_POST['Petard2'];
            /** DRY2 */
            $armyManager = new ArmyManager();
            $units = $armyManager->selectAllUnits();
            $attArcher = $units['units'][0]['attack'];
            $attSpearman = $units['units'][11]['attack'];
            $attPikeman = $units['units'][12]['attack'];
            $attChampion = $units['units'][18]['attack'];
            $attPetard = $units['units'][20]['attack'];
            /** DRY2 */
            $attackTot1 = 0;
            $attackTot1 += ($attArcher * $archer1);
            $attackTot1 += ($attSpearman * $spearman1);
            $attackTot1 += ($attPikeman * $pikeman1);
            $attackTot1 += ($attChampion * $champion1);
            $attackTot1 += ($attPetard * $petard1);
            $attackTot2 = 0;
            $attackTot2 += ($attArcher * $archer2);
            $attackTot2 += ($attSpearman * $spearman2);
            $attackTot2 += ($attPikeman * $pikeman2);
            $attackTot2 += ($attChampion * $champion2);
            $attackTot2 += ($attPetard * $petard2);
            $difference = $attackTot1 - $attackTot2;
            if ($difference == 0) {
                $result = 1;
                return $this->twig->render('Army/result.html.twig', ['result' => $result]);
            } elseif ($difference > 0) {
                $result = 2;
                return $this->twig->render('Army/result.html.twig', ['result' => $result]);
            } else {
                $result = 3;
                return $this->twig->render('Army/result.html.twig', ['result' => $result]);
            }
        }
    }
}
