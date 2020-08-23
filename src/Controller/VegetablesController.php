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
    public function allVegetable()
    {
        $vegetable = $this->getDoctrine()->getRepository(Vegetables::class)->findBy(
            [], 
            ["name" => "ASC"]
        );
        
        return $this->render('vegetables/index.html.twig', [
            "vegetables" => $vegetable
        ]);
    }
    
    /**
     * @Route("/vegetable/{id}/view", name="vegetable_view", requirements={"id" = "\d+"})
     */
    public function viewVegetable($id)
    {
        $vegetable = $this->getDoctrine()->getRepository(Vegetables::class)->find($id);
        

        if(empty($vegetable)) {
            throw $this->createNotFoundException("Désolé, nous n'avons pas ce légume dans notre base de donnée");
        }
       

        return $this->render('vegetables/vegetable_view.html.twig', [
            "vegetable" => $vegetable
            
        ]);
    }
}
