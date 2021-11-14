<?php

namespace App\Repository;

use App\Entity\Fleurdelys;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Fleurdelys|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fleurdelys|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fleurdelys[]    findAll()
 * @method Fleurdelys[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FleurdelysRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fleurdelys::class);
    }

    // /**
    //  * @return Fleurdelys[] Returns an array of Fleurdelys objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fleurdelys
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
