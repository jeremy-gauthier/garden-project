<?php

namespace App\Repository;

use App\Entity\Vegetables;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Vegetables|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vegetables|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vegetables[]    findAll()
 * @method Vegetables[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VegetablesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vegetables::class);
    }
    public function findOrderByName() {

        // on construit une requete 
        $builder = $this->createQueryBuilder('vegetables');
        $builder->orderBy('vegetables.name');
        $builder->setMaxResults(30);

        // on recupère la requete construite
        $query = $builder->getQuery();

        // je demande a doctrine d'éxecuter le requete et de me renvoyer les resultats
        return $query->getResult();
}}