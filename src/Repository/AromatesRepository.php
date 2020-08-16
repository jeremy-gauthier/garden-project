<?php

namespace App\Repository;

use App\Entity\Aromates;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Aromates|null find($id, $lockMode = null, $lockVersion = null)
 * @method Aromates|null findOneBy(array $criteria, array $orderBy = null)
 * @method Aromates[]    findAll()
 * @method Aromates[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AromatesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Aromates::class);
    }
    public function findOrderByName() {

        // on construit une requete 
        $builder = $this->createQueryBuilder('aromates');
        $builder->orderBy('aromates.name');
        $builder->setMaxResults(30);

        // on recupère la requete construite
        $query = $builder->getQuery();

        // je demande a doctrine d'éxecuter le requete et de me renvoyer les resultats
        return $query->getResult();
}}
