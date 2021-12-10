<?php

namespace App\Controller;

use App\Entity\Services;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $services = $this->entityManager->getRepository(Services::class)->findAll();
        

        return $this->render('home/index.html.twig', [
            'services' =>$services
            
        ]);
    }
     /**
     * @Route("/home/{id}", name="home_show")
     */
    public function show(Services $services)
    {
       
            return $this->redirectToRoute('home_show', ['id' => $services->getId()]);
        

        return $this->render('services/show.html.twig', [

            'services' => $services
            
        ]);
    }

    
}
