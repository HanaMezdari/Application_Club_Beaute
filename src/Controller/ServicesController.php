<?php

namespace App\Controller;

use App\Entity\Services;
use App\Entity\Centresdebeaute;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ServicesController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    
    /**
     * @Route("/services", name="services")
     */
    public function index(): Response
    {
        $services = $this->entityManager->getRepository(Services::class)->findAll();
        $centresdebeaute = $this->entityManager->getRepository(Centresdebeaute::class)->findAll();
        return $this->render('services/index.html.twig', [
            'services' => $services,
            'centresdebeaute' => $centresdebeaute
        ]);
    }
}
