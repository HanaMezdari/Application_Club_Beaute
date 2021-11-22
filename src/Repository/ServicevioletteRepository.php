<?php

namespace App\Repository;

use App\App\Data\SearchData;
use App\Entity\Serviceviolette;
use Doctrine\Persistence\ManagerRegistry;

use Knp\Component\Pager\PaginatorInterface;
use Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Serviceviolette|null find($id, $lockMode = null, $lockVersion = null)
 * @method Serviceviolette|null findOneBy(array $criteria, array $orderBy = null)
 * @method Serviceviolette[]    findAll()
 * @method Serviceviolette[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServicevioletteRepository extends ServiceEntityRepository
{

    /**
     * @var PaginatorInterface
     */

    private $paginator;
    
    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        parent::__construct($registry, Serviceviolette::class);
        $this->paginator = $paginator;
    }

    /**
     * Récupère les servicelilia en lien avec une recherche 
     * @return PaginatorInterface
     */

 
    public function findSearch(SearchData $search):SlidingPagination
    {
        $query = $this
       
             ->createQueryBuilder('serviceviolette')
             ->select('services', 'serviceviolette')
             ->join('serviceviolette.services', 'services');

          if (!empty($search->q)){
              $query = $query
                ->andwhere('serviceviolette.nom LIKE :q')
                ->setParameter('q', $search->q);
          }

          if (!empty($search->min)){
            $query = $query
              ->andwhere('serviceviolette.prix >= :min')
              ->setParameter('min', $search->min);
         }

         if (!empty($search->max)){
            $query = $query
              ->andwhere('serviceviolette.prix <= :max')
              ->setParameter('max', $search->max);
         }

         if (!empty($search->promo)){
            $query = $query
              ->andwhere('serviceviolette.promo = 1');
              
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
