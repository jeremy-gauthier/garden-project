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
        return $this->json([
            'message' => 'Hi, I am the MainController',
            'path' => 'src/Controller/MainController.php',
        ]);
    }
}
