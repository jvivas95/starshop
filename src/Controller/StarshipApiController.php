<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Model\Starship;
use App\Repository\StarshipRpository;


#[Route('/api/starships')]
class StarshipApiController extends AbstractController
{
    #[Route('', methods: ['GET'], name: 'app_starship_api')]
    public function getColletion(StarshipRpository $repository): Response
    {
        $starships = $repository->findAll();

        return $this->json($starships);
    }

    #[Route('/{id<\d+>}', methods: ['GET'],)]
    public function get(int $id, StarshipRpository $repository)
    {

        $starship = $repository->find($id);

        if (!$starship) {
            throw $this->createNotFoundException('Starship no encontrada');
        }

        return $this->json($starship);
    }
}
