<?php

namespace App\Controller;

use App\Entity\Aromates;
use App\Repository\AromatesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AromatesController extends AbstractController
{
    // Show all aromatics:
    /**
     * @Route("/aromates", name="aromates_list",methods={"GET"})
     */
    public function index(AromatesRepository $aromatesRepository)
    {
        return $this->render('aromates/index.html.twig', [
            'aromates' => $aromatesRepository->findAll(),
        ]);
    }
    
}

