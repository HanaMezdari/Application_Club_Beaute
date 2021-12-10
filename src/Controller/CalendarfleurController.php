<?php

namespace App\Controller;

use App\Entity\Calendarfleur;
use App\Form\CalendarfleurType;
use App\Repository\CalendarfleurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/calendarfleur")
 */
class CalendarfleurController extends AbstractController
{
    /**
     * @Route("/", name="calendarfleur_index", methods={"GET"})
     */
    public function index(CalendarfleurRepository $calendarfleurRepository): Response
    {
        return $this->render('calendarfleur/index.html.twig', [
            'calendarfleurs' => $calendarfleurRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="calendarfleur_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $calendarfleur = new Calendarfleur();
        $form = $this->createForm(CalendarfleurType::class, $calendarfleur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($calendarfleur);
            $entityManager->flush();

            return $this->redirectToRoute('calendarfleur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('calendarfleur/new.html.twig', [
            'calendarfleur' => $calendarfleur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="calendarfleur_show", methods={"GET"})
     */
    public function show(Calendarfleur $calendarfleur): Response
    {
        return $this->render('calendarfleur/show.html.twig', [
            'calendarfleur' => $calendarfleur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="calendarfleur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Calendarfleur $calendarfleur): Response
    {
        $form = $this->createForm(CalendarfleurType::class, $calendarfleur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('calendarfleur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('calendarfleur/edit.html.twig', [
            'calendarfleur' => $calendarfleur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="calendarfleur_delete", methods={"POST"})
     */
    public function delete(Request $request, Calendarfleur $calendarfleur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$calendarfleur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($calendarfleur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('calendarfleur_index', [], Response::HTTP_SEE_OTHER);
    }
}
