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
        $destinationsListe = $this->destinationRepo->findAll();

        return $this->render('default/index.html.twig', [
            'destinationsListe' => $destinationsListe,
        ]);
    }
}
