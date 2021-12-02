<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OffremariageController extends AbstractController
{
    /**
     * @Route("/offremariage", name="offremariage")
     */
    public function index(): Response
    {
        return $this->render('offremariage/index.html.twig', [
            'controller_name' => 'OffremariageController',
        ]);
    }
}
