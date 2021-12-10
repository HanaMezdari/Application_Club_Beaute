<?php

namespace App\Repository;

use App\Entity\Calendarfleur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Calendarfleur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Calendarfleur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Calendarfleur[]    findAll()
 * @method Calendarfleur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CalendarfleurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Calendarfleur::class);
    }

    // /**
    //  * @return Calendarfleur[] Returns an array of Calendarfleur objects
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
    public function findOneBySomeField($value): ?Calendarfleur
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
