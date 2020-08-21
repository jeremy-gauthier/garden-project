<?php

namespace App\Repository;

use App\Entity\Vegetables;
use App\Entity\Fruits;
use App\Entity\Aromates;
use App\Entity\Month;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Month|null find($id, $lockMode = null, $lockVersion = null)
 * @method Month|null findOneBy(array $criteria, array $orderBy = null)
 * @method Month[]    findAll()
 * @method Month[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

    class MonthRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Month::class);
    }

    public function findWithVegetable($id) {
        $builder = $this->createQueryBuilder('month');

        $builder->where('month.id = :monthId');
        $builder->setParameter('monthId', $id);

        $builder->leftJoin('month.vegetable', 'vegetable');
        $builder->addSelect('vegetable');

        $builder->orderBy('vegetable.name');

        $query = $builder->getQuery();

        return $query->getOneOrNullResult();
}}