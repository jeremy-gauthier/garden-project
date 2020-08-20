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
    
    /**
     * @Route("/fruit/{id}/view", name="fruit_view", requirements={"id" = "\d+"})
     */
    public function viewFruit($id)
    {
        $fruit = $this->getDoctrine()->getRepository(Fruits::class)->find($id);
        

        if(empty($fruit)) {
            throw $this->createNotFoundException("Désolé, nous n'avons pas ce fruit dans notre base de donnée");
        }
       

        return $this->render('fruits/fruit_view.html.twig', [
            "fruit" => $fruit
            
        ]);
    }
}

