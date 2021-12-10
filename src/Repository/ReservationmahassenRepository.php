<?php

namespace App\Repository;

use App\Entity\Reservationmahassen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reservationmahassen|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservationmahassen|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservationmahassen[]    findAll()
 * @method Reservationmahassen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationmahassenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservationmahassen::class);
    }

    // /**
    //  * @return Reservationmahassen[] Returns an array of Reservationmahassen objects
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
    public function findOneBySomeField($value): ?Reservationmahassen
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
