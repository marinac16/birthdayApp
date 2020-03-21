<?php

namespace App\Controller;

use App\Repository\DestinationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /** @var DestinationRepository */
    private $destinationRepo;

    public function __construct(DestinationRepository $destinationRepo)
    {
        $this->destinationRepo = $destinationRepo;
    }

    /**
     * @Route("/", name="default")
     */
    public function index()
    {


        return $this->render('default/index.html.twig', [

        ]);
    }

    /**
     * @Route("/choisi-la-destination", name="choix")
     */
    public function AfficherChoix()
    {
        $destinationsListe = $this->destinationRepo->findAll();

        return $this->render('default/choix.html.twig', [
            'destinationsListe' => $destinationsListe,
        ]);

    }

    /**
     * @Route("/remerciement", name="remerciement")
     */
    public function AfficherRemerciement()
    {


        return $this->render('default/remerciement.html.twig', [

        ]);

    }
}
