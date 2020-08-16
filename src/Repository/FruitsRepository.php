<?php

namespace App\Repository;

use App\Entity\Fruits;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Fruits|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fruits|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fruits[]    findAll()
 * @method Fruits[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FruitsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fruits::class);
    }
    public function findOrderByName() {

        // on construit une requete 
        $builder = $this->createQueryBuilder('fruits');
        $builder->orderBy('fruits.name');
        $builder->setMaxResults(30);

        // on recupère la requete construite
        $query = $builder->getQuery();

        // je demande a doctrine d'éxecuter le requete et de me renvoyer les resultats
        return $query->getResult();
}}