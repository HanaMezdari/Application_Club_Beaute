<?php

namespace App\Controller;

use App\Entity\Calendarmahassen;
use App\Form\CalendarmahassenType;
use App\Repository\CalendarmahassenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/calendarmahassen")
 */
class CalendarmahassenController extends AbstractController
{
    /**
     * @Route("/", name="calendarmahassen_index", methods={"GET"})
     */
    public function index(CalendarmahassenRepository $calendarmahassenRepository): Response
    {
        return $this->render('calendarmahassen/index.html.twig', [
            'calendarmahassens' => $calendarmahassenRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="calendarmahassen_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $calendarmahassen = new Calendarmahassen();
        $form = $this->createForm(CalendarmahassenType::class, $calendarmahassen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($calendarmahassen);
            $entityManager->flush();

            return $this->redirectToRoute('calendarmahassen_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('calendarmahassen/new.html.twig', [
            'calendarmahassen' => $calendarmahassen,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="calendarmahassen_show", methods={"GET"})
     */
    public function show(Calendarmahassen $calendarmahassen): Response
    {
        return $this->render('calendarmahassen/show.html.twig', [
            'calendarmahassen' => $calendarmahassen,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="calendarmahassen_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Calendarmahassen $calendarmahassen): Response
    {
        $form = $this->createForm(CalendarmahassenType::class, $calendarmahassen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('calendarmahassen_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('calendarmahassen/edit.html.twig', [
            'calendarmahassen' => $calendarmahassen,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="calendarmahassen_delete", methods={"POST"})
     */
    public function delete(Request $request, Calendarmahassen $calendarmahassen): Response
    {
        if ($this->isCsrfTokenValid('delete'.$calendarmahassen->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($calendarmahassen);
            $entityManager->flush();
        }

        return $this->redirectToRoute('calendarmahassen_index', [], Response::HTTP_SEE_OTHER);
    }
}
