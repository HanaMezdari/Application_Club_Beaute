<?php

namespace App\Controller;

use App\Entity\Reservationlilia;
use App\Form\ReservationliliaType;
use App\Repository\ReservationliliaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservationlilia")
 */
class ReservationliliaController extends AbstractController
{
    /**
     * @Route("/", name="reservationlilia_index", methods={"GET"})
     */
    public function index(ReservationliliaRepository $reservationliliaRepository): Response
    {
        return $this->render('reservationlilia/index.html.twig', [
            'reservationlilias' => $reservationliliaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="reservationlilia_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reservationlilia = new Reservationlilia();
        $form = $this->createForm(ReservationliliaType::class, $reservationlilia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservationlilia);
            $entityManager->flush();

            return $this->redirectToRoute('reservationlilia_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservationlilia/new.html.twig', [
            'reservationlilia' => $reservationlilia,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservationlilia_show", methods={"GET"})
     */
    public function show(Reservationlilia $reservationlilia): Response
    {
        return $this->render('reservationlilia/show.html.twig', [
            'reservationlilia' => $reservationlilia,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reservationlilia_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reservationlilia $reservationlilia): Response
    {
        $form = $this->createForm(ReservationliliaType::class, $reservationlilia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservationlilia_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservationlilia/edit.html.twig', [
            'reservationlilia' => $reservationlilia,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservationlilia_delete", methods={"POST"})
     */
    public function delete(Request $request, Reservationlilia $reservationlilia): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationlilia->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reservationlilia);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservationlilia_index', [], Response::HTTP_SEE_OTHER);
    }
}
