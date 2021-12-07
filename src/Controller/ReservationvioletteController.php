<?php

namespace App\Controller;

use App\Entity\Reservationviolette;
use App\Form\ReservationvioletteType;
use App\Repository\ReservationvioletteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservationviolette")
 */
class ReservationvioletteController extends AbstractController
{
    /**
     * @Route("/", name="reservationviolette_index", methods={"GET"})
     */
    public function index(ReservationvioletteRepository $reservationvioletteRepository): Response
    {
        return $this->render('reservationviolette/index.html.twig', [
            'reservationviolettes' => $reservationvioletteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="reservationviolette_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reservationviolette = new Reservationviolette();
        $form = $this->createForm(ReservationvioletteType::class, $reservationviolette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservationviolette);
            $entityManager->flush();

            return $this->redirectToRoute('reservationviolette_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservationviolette/new.html.twig', [
            'reservationviolette' => $reservationviolette,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservationviolette_show", methods={"GET"})
     */
    public function show(Reservationviolette $reservationviolette): Response
    {
        return $this->render('reservationviolette/show.html.twig', [
            'reservationviolette' => $reservationviolette,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reservationviolette_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reservationviolette $reservationviolette): Response
    {
        $form = $this->createForm(ReservationvioletteType::class, $reservationviolette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservationviolette_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservationviolette/edit.html.twig', [
            'reservationviolette' => $reservationviolette,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservationviolette_delete", methods={"POST"})
     */
    public function delete(Request $request, Reservationviolette $reservationviolette): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationviolette->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reservationviolette);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservationviolette_index', [], Response::HTTP_SEE_OTHER);
    }
}
