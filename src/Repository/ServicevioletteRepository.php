<?php

namespace App\Repository;

use App\Entity\Serviceviolette;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Serviceviolette|null find($id, $lockMode = null, $lockVersion = null)
 * @method Serviceviolette|null findOneBy(array $criteria, array $orderBy = null)
 * @method Serviceviolette[]    findAll()
 * @method Serviceviolette[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServicevioletteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Serviceviolette::class);
    }

    // /**
    //  * @return Serviceviolette[] Returns an array of Serviceviolette objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Serviceviolette
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
