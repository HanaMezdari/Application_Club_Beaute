<?php

namespace App\Repository;

use App\Entity\Mahassen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Mahassen|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mahassen|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mahassen[]    findAll()
 * @method Mahassen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MahassenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mahassen::class);
    }

    // /**
    //  * @return Mahassen[] Returns an array of Mahassen objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Mahassen
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
