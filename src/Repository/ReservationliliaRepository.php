<?php

namespace App\Repository;

use App\Entity\Reservationlilia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reservationlilia|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservationlilia|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservationlilia[]    findAll()
 * @method Reservationlilia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationliliaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservationlilia::class);
    }

    // /**
    //  * @return Reservationlilia[] Returns an array of Reservationlilia objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reservationlilia
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
