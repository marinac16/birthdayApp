<?php

namespace App\Controller;

use App\Entity\Vote;
use App\Repository\DestinationRepository;
use App\Repository\VoteRepository;
use App\Services\CalculDesVotes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
//    /** @var DestinationRepository */
//    private $destinationRepo;
//
//    /** @var VoteRepository */
//    private $voteRepo;
//
//    /** @var CalculDesVotes */
//    private $calculDesVotes;
//
//    public function __construct(DestinationRepository $destinationRepo, VoteRepository $voteRepo, CalculDesVotes $calculDesVotes)
//    {
//        $this->destinationRepo = $destinationRepo;
//        $this->voteRepo = $voteRepo;
//        $this->calculDesVotes = $calculDesVotes;
//    }
//    /**
//     * @Route("/admin", name="admin")
//     */
//    public function index()
//    {
//
//        $destinations = $this->destinationRepo->findAll();
//
//
//
//
//
//
//        return $this->render('admin/index.html.twig', [
//            "votes" => $this->calculDesVotes->calculerLesVotes(),
//            "destinations" => $destinations,
//        ]);
//    }
}
