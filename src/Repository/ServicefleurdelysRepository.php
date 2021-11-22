<?php

namespace App\Repository;

use App\App\Data\SearchData;
use App\Entity\Servicefleurdelys;
use Doctrine\Persistence\ManagerRegistry;

use Knp\Component\Pager\PaginatorInterface;
use Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Servicefleurdelys|null find($id, $lockMode = null, $lockVersion = null)
 * @method Servicefleurdelys|null findOneBy(array $criteria, array $orderBy = null)
 * @method Servicefleurdelys[]    findAll()
 * @method Servicefleurdelys[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServicefleurdelysRepository extends ServiceEntityRepository
{

    /**
     * @var PaginatorInterface
     */

    private $paginator;
    
    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        parent::__construct($registry, Servicefleurdelys::class);
        $this->paginator = $paginator;
    }

    /**
     * Récupère les servicelilia en lien avec une recherche 
     * @return PaginatorInterface
     */

 
    public function findSearch(SearchData $search):SlidingPagination
    {
        $query = $this
       
             ->createQueryBuilder('servicefleurdelys')
             ->select('services', 'servicefleurdelys')
             ->join('servicefleurdelys.services', 'services');

          if (!empty($search->q)){
              $query = $query
                ->andwhere('servicefleurdelys.nom LIKE :q')
                ->setParameter('q', $search->q);
          }

          if (!empty($search->min)){
            $query = $query
              ->andwhere('servicefleurdelys.prix >= :min')
              ->setParameter('min', $search->min);
         }

         if (!empty($search->max)){
            $query = $query
              ->andwhere('servicefleurdelys.prix <= :max')
              ->setParameter('max', $search->max);
         }

         if (!empty($search->promo)){
            $query = $query
              ->andwhere('servicefleurdelys.promo = 1');
              
         }

         if (!empty($search->services)){
            $query = $query
              ->andwhere('services.id IN  (:services)')
              ->setParameter('services', $search->services);
              
         }
         $query = $query->getQuery();
          
         return $this->paginator->paginate(
             $query,
             $search->page,
             10
            );
    }
}
