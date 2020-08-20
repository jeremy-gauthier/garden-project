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
    
    /**
     * @Route("/aromate/{id}/view", name="aromate_view", requirements={"id" = "\d+"})
     */
    public function viewAromate($id)
    {
        $aromate = $this->getDoctrine()->getRepository(Aromates::class)->find($id);
        

        if(empty($aromate)) {
            throw $this->createNotFoundException("Désolé, nous n'avons pas cet aromate dans notre base de donnée");
        }
       

        return $this->render('aromates/aromate_view.html.twig', [
            "aromate" => $aromate
            
        ]);
    }
}

