<?php

namespace App\Controller;

use App\Entity\Publicite;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Entity\Centresdebeaute;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CentresdebeauteController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/centresdebeaute", name="centresdebeaute")
     */
    public function index(): Response
    {
        $publicite = $this->entityManager->getRepository(Publicite::class)->findAll();
        $centresdebeaute = $this->entityManager->getRepository(Centresdebeaute::class)->findAll();
         
        return $this->render('centresdebeaute/index.html.twig', [
            'centresdebeaute' =>$centresdebeaute,
            'publicite' => $publicite,
        ]);
    }
     /**
     * @Route("/centresdebeaute/{id}", name="centresdebeaute_show")
     */
    public function show(Centresdebeaute $centresdebeaute, Request $request, EntityManagerInterface  $manager)
    {
        
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $commentaire->setDate(new \DateTime())
                     ->setCentresdebeaute($centresdebeaute);

            $manager->persist($commentaire);
            $manager->flush();

            return $this->redirectToRoute('centresdebeaute_show', ['id' => $centresdebeaute->getId()]);
        }

        return $this->render('centresdebeaute/show.html.twig', [
            
            'centresdebeaute' => $centresdebeaute,
            'commentaireForm' => $form->createView()
            


        ]);
    }

    
}

