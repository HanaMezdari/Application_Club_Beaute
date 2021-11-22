<?php

namespace App\Controller;

use App\Entity\Services;
use App\Form\SearchForm;
use App\App\Data\SearchData;
use App\Repository\ServicemahassenRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ServicemahassenController extends AbstractController
{
    /**
     * @Route("/servicemahassen", name="servicemahassen")
     */
    public function index(ServicemahassenRepository $repository, Request $request)
    {
        $data = new SearchData();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchForm::class, $data); 
        $form->handleRequest($request);
        $services = $repository->findSearch($data); 
        $servicemahassen = $repository->findSearch($data);
        return $this->render('servicemahassen/index.html.twig', [
            'servicemahassen' => $servicemahassen,
            'services' => $services,
            'form' => $form->createView()
        ]);
    }
}
