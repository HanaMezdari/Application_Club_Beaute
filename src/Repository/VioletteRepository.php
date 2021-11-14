<?php

namespace App\Repository;

use App\Entity\Violette;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Violette|null find($id, $lockMode = null, $lockVersion = null)
 * @method Violette|null findOneBy(array $criteria, array $orderBy = null)
 * @method Violette[]    findAll()
 * @method Violette[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VioletteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Violette::class);
    }

    // /**
    //  * @return Violette[] Returns an array of Violette objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Violette
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
