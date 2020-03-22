<?php

namespace App\Controller;

use App\Entity\Vote;
use App\Form\VoteType;
use App\Repository\DestinationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
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
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function AfficherChoix(Request $request, EntityManagerInterface $em)
    {
        $destinationsListe = $this->destinationRepo->findAll();

        $vote = new Vote();
        $user = $this->getUser();

        $form = $this->createForm(VoteType::class, $vote);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $vote->setUser($user);

            $em->persist($vote);
            $em->flush();

            return $this->redirectToRoute('remerciement', []);

        }


        return $this->render('default/choix.html.twig', [
            'destinationsListe' => $destinationsListe,
            'form'=> $form->createView(),
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
