<?php

namespace App\Controller;

use App\Entity\Vegetables;
use App\Repository\VegetablesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 */
class VegetablesController extends AbstractController
{
    // Show all vegetables:
    /**
     * @Route("/vegetables", name="vegetables_list",methods={"GET"})
     */
    public function index(VegetablesRepository $vegetablesRepository)
    {
        return $this->json($VegetablesRepository->findAll(), 200, [], ['groups' => 'vegetables:list']);
    }
    
}
