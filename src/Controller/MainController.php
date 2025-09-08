<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homePage()
    {

        $contador = 4;
        $vehiculos = ['Coche', 'Moto', 'Bici'];

        return $this->render('homepage.html.twig',
            [
                'contador' => $contador,
                'vehiculos' => $vehiculos
            ]
        );
    }
}
