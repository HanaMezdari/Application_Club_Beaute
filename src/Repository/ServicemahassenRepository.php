<?php

namespace App\Repository;

use App\App\Data\SearchData;
use App\Entity\Servicemahassen;
use Doctrine\Persistence\ManagerRegistry;

use Knp\Component\Pager\PaginatorInterface;
use Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Servicemahassen|null find($id, $lockMode = null, $lockVersion = null)
 * @method Servicemahassen|null findOneBy(array $criteria, array $orderBy = null)
 * @method Servicemahassen[]    findAll()
 * @method Servicemahassen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServicemahassenRepository extends ServiceEntityRepository
{

    /**
     * @var PaginatorInterface
     */

    private $paginator;
    
    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        parent::__construct($registry, Servicemahassen::class);
        $this->paginator = $paginator;
    }

    /**
     * Récupère les servicelilia en lien avec une recherche 
     * @return PaginatorInterface
     */

 
    public function findSearch(SearchData $search):SlidingPagination
    {
        $query = $this
       
             ->createQueryBuilder('servicemahassen')
             ->select('services', 'servicemahassen')
             ->join('servicemahassen.services', 'services');

          if (!empty($search->q)){
              $query = $query
                ->andwhere('servicemahassen.nom LIKE :q')
                ->setParameter('q', $search->q);
          }

          if (!empty($search->min)){
            $query = $query
              ->andwhere('servicemahassen.prix >= :min')
              ->setParameter('min', $search->min);
         }

         if (!empty($search->max)){
            $query = $query
              ->andwhere('servicemahassen.prix <= :max')
              ->setParameter('max', $search->max);
         }

         if (!empty($search->promo)){
            $query = $query
              ->andwhere('servicemahassen.promo = 1');
              
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
