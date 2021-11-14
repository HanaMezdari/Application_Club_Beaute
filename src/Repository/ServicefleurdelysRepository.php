<?php

namespace App\Repository;

use App\Entity\Servicefleurdelys;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Servicefleurdelys|null find($id, $lockMode = null, $lockVersion = null)
 * @method Servicefleurdelys|null findOneBy(array $criteria, array $orderBy = null)
 * @method Servicefleurdelys[]    findAll()
 * @method Servicefleurdelys[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServicefleurdelysRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Servicefleurdelys::class);
    }

    // /**
    //  * @return Servicefleurdelys[] Returns an array of Servicefleurdelys objects
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
    public function findOneBySomeField($value): ?Servicefleurdelys
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
