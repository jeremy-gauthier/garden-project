<?php

namespace App\Controller;

use App\Entity\Vegetables;
use App\Repository\VegetablesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class VegetablesController extends AbstractController
{
   // Show all vegetables:
    /**
     * @Route("/vegetables", name="vegetable_list",methods={"GET"})
     */
    public function index(VegetablesRepository $vegetablesRepository)
    {
        return $this->render('vegetables/index.html.twig', [
            'vegetables' => $vegetablesRepository->findAll(),
        ]);
    }
    
}
