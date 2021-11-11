<?php

namespace App\Repository;

use App\Entity\Centresdebeaute;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Centresdebeaute|null find($id, $lockMode = null, $lockVersion = null)
 * @method Centresdebeaute|null findOneBy(array $criteria, array $orderBy = null)
 * @method Centresdebeaute[]    findAll()
 * @method Centresdebeaute[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CentresdebeauteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Centresdebeaute::class);
    }

    // /**
    //  * @return Centresdebeaute[] Returns an array of Centresdebeaute objects
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
    public function findOneBySomeField($value): ?Centresdebeaute
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
