<?php

namespace App\Repository;

use App\Entity\Calendaar2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Calendaar2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Calendaar2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Calendaar2[]    findAll()
 * @method Calendaar2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Calendaar2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Calendaar2::class);
    }

    // /**
    //  * @return Calendaar2[] Returns an array of Calendaar2 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Calendaar2
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
