<?php

namespace App\Controller;

use App\Entity\Garden;
use App\Repository\GardenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        return $this->render('main/homepage.html.twig');
    }

    /**
     * @Route("/potager", name="garden")
     */
    public function potager()
    {
        $garden = $this->getDoctrine()->getRepository(Garden::class)->findBy(
            [], 
            ["plant" => "ASC"]
        );

        return $this->render('main/garden.html.twig', [
            "garden" => $garden
        ]);
    }
}
