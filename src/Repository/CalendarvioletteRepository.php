<?php

namespace App\Repository;

use App\Entity\Calendarviolette;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Calendarviolette|null find($id, $lockMode = null, $lockVersion = null)
 * @method Calendarviolette|null findOneBy(array $criteria, array $orderBy = null)
 * @method Calendarviolette[]    findAll()
 * @method Calendarviolette[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CalendarvioletteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Calendarviolette::class);
    }

    // /**
    //  * @return Calendarviolette[] Returns an array of Calendarviolette objects
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
    public function findOneBySomeField($value): ?Calendarviolette
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
