<?php

namespace App\Controller;

use App\Entity\Calendarviolette;
use App\Form\Calendarviolette1Type;
use App\Repository\CalendarvioletteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/calendarviolette")
 */
class CalendarvioletteController extends AbstractController
{
    /**
     * @Route("/", name="calendarviolette_index", methods={"GET"})
     */
    public function index(CalendarvioletteRepository $calendarvioletteRepository): Response
    {
        return $this->render('calendarviolette/index.html.twig', [
            'calendarviolettes' => $calendarvioletteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="calendarviolette_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $calendarviolette = new Calendarviolette();
        $form = $this->createForm(Calendarviolette1Type::class, $calendarviolette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($calendarviolette);
            $entityManager->flush();

            return $this->redirectToRoute('calendarviolette_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('calendarviolette/new.html.twig', [
            'calendarviolette' => $calendarviolette,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="calendarviolette_show", methods={"GET"})
     */
    public function show(Calendarviolette $calendarviolette): Response
    {
        return $this->render('calendarviolette/show.html.twig', [
            'calendarviolette' => $calendarviolette,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="calendarviolette_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Calendarviolette $calendarviolette): Response
    {
        $form = $this->createForm(Calendarviolette1Type::class, $calendarviolette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('calendarviolette_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('calendarviolette/edit.html.twig', [
            'calendarviolette' => $calendarviolette,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="calendarviolette_delete", methods={"POST"})
     */
    public function delete(Request $request, Calendarviolette $calendarviolette): Response
    {
        if ($this->isCsrfTokenValid('delete'.$calendarviolette->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($calendarviolette);
            $entityManager->flush();
        }

        return $this->redirectToRoute('calendarviolette_index', [], Response::HTTP_SEE_OTHER);
    }
}
