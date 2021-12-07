<?php

namespace App\Repository;

use App\Entity\Reservationfleur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reservationfleur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservationfleur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservationfleur[]    findAll()
 * @method Reservationfleur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationfleurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservationfleur::class);
    }

    // /**
    //  * @return Reservationfleur[] Returns an array of Reservationfleur objects
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
    public function findOneBySomeField($value): ?Reservationfleur
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
