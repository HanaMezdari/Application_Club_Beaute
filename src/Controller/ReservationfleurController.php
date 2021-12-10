<?php

namespace App\Controller;

use App\Entity\Reservationfleur;
use App\Form\ReservationfleurType;
use App\Repository\ReservationfleurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservationfleur")
 */
class ReservationfleurController extends AbstractController
{
    /**
     * @Route("/", name="reservationfleur_index", methods={"GET"})
     */
    public function index(ReservationfleurRepository $reservationfleurRepository): Response
    {
        return $this->render('reservationfleur/index.html.twig', [
            'reservationfleurs' => $reservationfleurRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="reservationfleur_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reservationfleur = new Reservationfleur();
        $form = $this->createForm(ReservationfleurType::class, $reservationfleur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservationfleur);
            $entityManager->flush();

            return $this->redirectToRoute('reservationfleur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservationfleur/new.html.twig', [
            'reservationfleur' => $reservationfleur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservationfleur_show", methods={"GET"})
     */
    public function show(Reservationfleur $reservationfleur): Response
    {
        return $this->render('reservationfleur/show.html.twig', [
            'reservationfleur' => $reservationfleur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reservationfleur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reservationfleur $reservationfleur): Response
    {
        $form = $this->createForm(ReservationfleurType::class, $reservationfleur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservationfleur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservationfleur/edit.html.twig', [
            'reservationfleur' => $reservationfleur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservationfleur_delete", methods={"POST"})
     */
    public function delete(Request $request, Reservationfleur $reservationfleur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationfleur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reservationfleur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservationfleur_index', [], Response::HTTP_SEE_OTHER);
    }
}
