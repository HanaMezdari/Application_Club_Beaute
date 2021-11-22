<?php

namespace App\Controller;

use App\Entity\Services;
use App\Form\SearchForm;
use App\App\Data\SearchData;
use App\Repository\ServicevioletteRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ServicevioletteController extends AbstractController
{
    /**
     * @Route("/serviceviolette", name="serviceviolette")
     */
    public function index(ServicevioletteRepository $repository, Request $request)
    {
        $data = new SearchData();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchForm::class, $data); 
        $form->handleRequest($request);
        $services = $repository->findSearch($data); 
        $serviceviolette = $repository->findSearch($data);
        return $this->render('serviceviolette/index.html.twig', [
            'serviceviolette' => $serviceviolette,
            'services' => $services,
            'form' => $form->createView()
        ]);
    }
}
