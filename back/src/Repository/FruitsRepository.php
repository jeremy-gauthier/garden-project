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

    // /**
    //  * @return Fruits[] Returns an array of Fruits objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fruits
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
