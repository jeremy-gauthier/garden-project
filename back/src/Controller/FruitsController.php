<?php

namespace App\Controller;

use App\Entity\Fruits;
use App\Repository\FruitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 */
class FruitsController extends AbstractController
{
    // Show all fruits:
    /**
     * @Route("/fruits", name="fruits_list",methods={"GET"})
     */
    public function index(FruitsRepository $fruitsRepository)
    {
        return $this->json($fruitsRepository->findAll(), 200, [], ['groups' => 'fruits:list']);
    }
    
}
