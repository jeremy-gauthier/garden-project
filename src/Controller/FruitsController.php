<?php

namespace App\Controller;

use App\Entity\Fruits;
use App\Repository\FruitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FruitsController extends AbstractController
{
    // Show all fruits:
    /**
     * @Route("/fruits", name="fruits_list",methods={"GET"})
     */
    public function index(FruitsRepository $fruitsRepository)
    {
        return $this->render('fruits/index.html.twig', [
            'fruits' => $fruitsRepository->findAll(),
        ]);
    }
    
}
