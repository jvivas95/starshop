<?php

namespace App\Controller;

use App\Repository\StarshipRpository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homePage(StarshipRpository $starshipRpository)
    {

        $ships = $starshipRpository->findAll();
        //$starshipCount = count($ships);
        $myShip = $ships[array_rand($ships)];

        return $this->render(
            '/main/homepage.html.twig',
            [
                //'contador' => $starshipCount,
                'myShip' => $myShip,
                'ships' => $ships
            ]
        );
    }
}
