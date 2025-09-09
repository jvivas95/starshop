<?php

namespace App\Controller;

use App\Repository\StarshipRpository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class StarshipController extends AbstractController
{
    #[Route('/starship/{id<\d+>}', name: 'app_starship_show')]
    public function show(int $id, StarshipRpository $repository): Response
    {
        $ship = $repository->find($id);

        if (!$ship) {
            throw $this->createNotFoundException('Starship no encontrado');
        }

        return $this->render('starship/index.html.twig', [
            'ship' => $ship,
        ]);
    }
}
