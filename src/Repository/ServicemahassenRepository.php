<?php

namespace App\Repository;

use App\Entity\Servicemahassen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Servicemahassen|null find($id, $lockMode = null, $lockVersion = null)
 * @method Servicemahassen|null findOneBy(array $criteria, array $orderBy = null)
 * @method Servicemahassen[]    findAll()
 * @method Servicemahassen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServicemahassenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Servicemahassen::class);
    }

    // /**
    //  * @return Servicemahassen[] Returns an array of Servicemahassen objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Servicemahassen
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
