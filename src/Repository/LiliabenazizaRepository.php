<?php

namespace App\Repository;

use App\Entity\Liliabenaziza;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Liliabenaziza|null find($id, $lockMode = null, $lockVersion = null)
 * @method Liliabenaziza|null findOneBy(array $criteria, array $orderBy = null)
 * @method Liliabenaziza[]    findAll()
 * @method Liliabenaziza[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LiliabenazizaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Liliabenaziza::class);
    }

    // /**
    //  * @return Liliabenaziza[] Returns an array of Liliabenaziza objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Liliabenaziza
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
