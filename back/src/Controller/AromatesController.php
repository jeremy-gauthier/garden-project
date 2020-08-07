<?php

namespace App\Controller;

use App\Entity\Aromates;
use App\Repository\AromatesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 */
class AromatesController extends AbstractController
{
    // Show all aromates:
    /**
     * @Route("/aromates", name="aromates_list",methods={"GET"})
     */
    public function index(AromatesRepository $aromatesRepository)
    {
        return $this->json($aromatesRepository->findAll(), 200, [], ['groups' => 'aromates:list']);
    }
    
}

