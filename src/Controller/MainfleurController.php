<?php

namespace App\Controller;

use App\Repository\CalendarfleurRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainfleurController extends AbstractController
{
    /**
     * @Route("/mainfleur", name="mainfleur")
     */
    public function index(CalendarfleurRepository $calendarfleur)
    {
        $events = $calendarfleur->findAll();

        $rdvs  = [];

        foreach($events as $event){
           $rdvs[] = [
               'id' => $event->getId(),
               'start' => $event->getStart()->format('Y-m-d H:i:s'),
               'end' => $event->getEnd()->format('y-m-d H:i:s'),
               'titre' => $event->getTitre(),
               'description' => $event->getDescription(),
               'backgroundColor' => $event->getBackgroundColor(),
               'borderColor' => $event->getBorderColor(),
               'textColor' => $event->getTextColor(),
               'allDay' => $event->getAllDay(),
           ];
        }
         $data = json_encode($rdvs);

        return $this->render('mainfleur/index.html.twig', compact('data'));
        
    }
}
