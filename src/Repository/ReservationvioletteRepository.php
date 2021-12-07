<?php

namespace App\Repository;

use App\Entity\Reservationviolette;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reservationviolette|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservationviolette|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservationviolette[]    findAll()
 * @method Reservationviolette[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationvioletteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservationviolette::class);
    }

    // /**
    //  * @return Reservationviolette[] Returns an array of Reservationviolette objects
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
    public function findOneBySomeField($value): ?Reservationviolette
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
