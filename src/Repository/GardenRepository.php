<?php

namespace App\Repository;

use App\Entity\Garden;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Garden|null find($id, $lockMode = null, $lockVersion = null)
 * @method Garden|null findOneBy(array $criteria, array $orderBy = null)
 * @method Garden[]    findAll()
 * @method Garden[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GardenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Garden::class);
    }

    public function findOrderByName() {

        // on construit une requete 
        $builder = $this->createQueryBuilder('garden');
        $builder->orderBy('garden.name');
        $builder->setMaxResults(5);

        // on recupère la requete construite
        $query = $builder->getQuery();

        // je demande a doctrine d'éxecuter le requete et de me renvoyer les resultats
        return $query->getResult();
}
}
