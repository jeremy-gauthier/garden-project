<?php

namespace App\Controller;

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
        return $this->render('main/garden.html.twig');
    }
}
