<?php

namespace App\Controller;

use App\Model\VanManager;

class VanController extends AbstractController
{

    /**
     * Display result
     */

    public function index(): string
    {
        return $this->twig->render('Result/result.html.twig');
    }

    public function add(): string 
    {
        $A = 0;
        $B = 0;
        $C = 0;
        $D = 0;
        $E = 0;
        $F = 0;
        $G = 0;
        $H = 0;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $answers = array_map('trim', $_POST);

            var_dump($answers);

            switch ($answers['q1']) {
                case 1:
                    $A += 2;
                    $G += 2;
                    $C++;
                    $D++;
                    $E--;
                    $H -= 2;
                    break;
                case 2:
                    $C += 2;
                    $D += 2;
                    $F += 2;
                    $A++;
                    $E++;
                    $B++;
                    $H--;
                    $G -= 2;
                    break;
                case 3:
                    $H += 2;
                    $F += 2;
                    $C++;
                    $D++;
                    $E++;
                    $A--;
                    $B -= 2;
                    break;
                case 4:
                    $A += 2;
                    $B++;
                    $C++;
                    $D++;
                    $E--;
                    $F-=2;
                    $G-=2;
                    $H-=2;
                    break;
            };

            switch ($answers['q2']) {
                case 1:
                    $A -= 2;
                    $B--;
                    $C--;
                    $D--;
                    $E++;
                    $F+=2;
                    $G+=2;
                    $H+=2;
                    break;
                case 2:
                    $A+=2;
                    $B++;
                    $C+=2;
                    $D++;
                    $E;
                    $F;
                    $G--;
                    $H-=2;
                    break;
                case 3:
                    $A-=2;
                    $B;
                    $C--;
                    $D--;
                    $E++;
                    $F++;
                    $G+=2;
                    $H+=2;
                    break;
                case 4:
                    $A++;
                    $B+=2;
                    $C+=2;
                    $D+=2;
                    $E--;
                    $F;
                    $G++;
                    $H-=2;
                    break;
            };

            switch ($answers['q3']) {
                case 1:
                    $A+=2;
                    $B++;
                    $C++;
                    $D++;
                    $E--;
                    $F-=2;
                    $G-=2;
                    $H-=2;
                    break;
                case 2:
                    $A-=2;
                    $B--;
                    $C++;
                    $D++;
                    $E++;
                    $F+=2;
                    $G;
                    $H+=2;
                    break;
                case 3:
                    $A+=2;
                    $B+=2;
                    $C++;
                    $D++;
                    $E--;
                    $F--;
                    $G--;
                    $H-=2;
                    break;
                case 4:
                    $A--;
                    $B+=2;
                    $C--;
                    $D;
                    $E--;
                    $F-=2;
                    $G++;
                    $H-=2;
                    break;
            };

            switch ($answers['q4']) {
                case 1:
                    $A+=3;
                    $B++;
                    $C++;
                    $D++;
                    $E-=3;
                    $F;
                    $G+=2;
                    $H--;
                    break;
                case 2:
                    $A-=2;
                    $B--;
                    $C--;
                    $D--;
                    $E-=2;
                    $F+=2;
                    $G;
                    $H++;
                    break;
                case 3:
                    $A-=2;
                    $B--;
                    $C++;
                    $D++;
                    $E++;
                    $F+=2;
                    $G+=3;
                    $H+=2;
                    break;
                case 4:
                    $A+=3;
                    $B+=2;
                    $C++;
                    $D;
                    $E-=2;
                    $F-=2;
                    $G;
                    $H--;
                    break;
            };

            switch ($answers['q5']) {
                case 1:
                    $A++;
                    $B+=2;
                    $C+=2;
                    $D++;
                    $E++;
                    $F--;
                    $G--;
                    $H-=2;
                    break;
                case 2:
                    $A++;
                    $B-=2;
                    $C;
                    $D+=2;
                    $E+=2;
                    $F++;
                    $G++;
                    $H--;
                    break;
                case 3:
                    $A-=2;
                    $B-=2;
                    $C-=2;
                    $D--;
                    $E--;
                    $F+=2;
                    $G++;
                    $H+=2;
                    break;
                case 4:
                    $A+=2;
                    $B+=2;
                    $C+=2;
                    $D-=2;
                    $E--;
                    $F-=2;
                    $G++;
                    $H++;
                    break;
            };

            $roofTent = $A;
            $combi = $B;
            $simpleVan = $C;
            $camperVan = $D;
            $fourgon = $E;
            $campingCar = $F;
            $adventurer = $G;
            $tourBus = $H;

            $vans = [];
            array_push($vans, $roofTent, $combi, $simpleVan, $camperVan, $fourgon, $campingCar, $adventurer, $tourBus);
            
        if(max($vans) == $roofTent) $this->id = 1;
        if(max($vans) == $combi) $this->id = 2;
        if(max($vans) == $simpleVan) $this->id = 3;
        if(max($vans) == $camperVan) $this->id = 4;
        if(max($vans) == $fourgon) $this->id = 5;
        if(max($vans) == $campingCar) $this->id = 6;
        if(max($vans) == $adventurer) $this->id = 7;
        if(max($vans) == $tourBus) $this->id = 8;

        $vanManager = new VanManager();
        $van = $vanManager->selectOneById($this->id);

        return $this->twig->render('Results/results.html.twig', ['van' => $van,]);

        header('location: /results');

        }
        return $this->twig->render('Quizz/quizz.html.twig');
    }
}
