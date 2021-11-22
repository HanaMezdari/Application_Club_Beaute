<?php

namespace App\Controller;

use App\Entity\Services;
use App\Form\SearchForm;
use App\App\Data\SearchData;
use App\Repository\ServicefleurdelysRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ServicefleurdelysController extends AbstractController
{
    /**
     * @Route("/servicefleurdelys", name="servicefleurdelys")
     */
    public function index(ServicefleurdelysRepository $repository, Request $request)
    {
        $data = new SearchData();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchForm::class, $data); 
        $form->handleRequest($request);
        $services = $repository->findSearch($data); 
        $servicefleurdelys = $repository->findSearch($data);
        return $this->render('servicefleurdelys/index.html.twig', [
            'servicefleurdelys' => $servicefleurdelys,
            'services' => $services,
            'form' => $form->createView()
        ]);
    }
}
