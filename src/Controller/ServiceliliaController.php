<?php

namespace App\Controller;

use App\Entity\Services;
use App\Form\SearchForm;
use App\App\Data\SearchData;
use App\Repository\ServiceliliaRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ServiceliliaController extends AbstractController
{
    /**
     * @Route("/servicelilia", name="servicelilia")
     */
    public function index(ServiceliliaRepository $repository, Request $request)
    {
        $data = new SearchData();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchForm::class, $data); 
        $form->handleRequest($request);
        $services = $repository->findSearch($data); 
        $servicelilia = $repository->findSearch($data);
        return $this->render('servicelilia/index.html.twig', [
            'servicelilia' => $servicelilia,
            'services' => $services,
            'form' => $form->createView()
        ]);
    }
}
