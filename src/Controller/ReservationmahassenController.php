<?php

namespace App\Controller;

use App\Entity\Reservationmahassen;
use App\Form\ReservationmahassenType;
use App\Repository\ReservationmahassenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservationmahassen")
 */
class ReservationmahassenController extends AbstractController
{
    /**
     * @Route("/", name="reservationmahassen_index", methods={"GET"})
     */
    public function index(ReservationmahassenRepository $reservationmahassenRepository): Response
    {
        return $this->render('reservationmahassen/index.html.twig', [
            'reservationmahassens' => $reservationmahassenRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="reservationmahassen_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reservationmahassen = new Reservationmahassen();
        $form = $this->createForm(ReservationmahassenType::class, $reservationmahassen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservationmahassen);
            $entityManager->flush();

            return $this->redirectToRoute('reservationmahassen_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservationmahassen/new.html.twig', [
            'reservationmahassen' => $reservationmahassen,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservationmahassen_show", methods={"GET"})
     */
    public function show(Reservationmahassen $reservationmahassen): Response
    {
        return $this->render('reservationmahassen/show.html.twig', [
            'reservationmahassen' => $reservationmahassen,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reservationmahassen_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reservationmahassen $reservationmahassen): Response
    {
        $form = $this->createForm(ReservationmahassenType::class, $reservationmahassen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservationmahassen_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservationmahassen/edit.html.twig', [
            'reservationmahassen' => $reservationmahassen,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservationmahassen_delete", methods={"POST"})
     */
    public function delete(Request $request, Reservationmahassen $reservationmahassen): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationmahassen->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reservationmahassen);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservationmahassen_index', [], Response::HTTP_SEE_OTHER);
    }
}
