<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SousserviceController extends AbstractController
{
    /**
     * @Route("/sousservice", name="sousservice")
     */
    public function index(): Response
    {
        return $this->render('sousservice/index.html.twig', [
            'controller_name' => 'SousserviceController',
        ]);
    }
}
