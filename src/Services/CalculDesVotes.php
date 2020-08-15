<?php


namespace App\Services;


use App\Entity\Destination;
use App\Repository\DestinationRepository;
use App\Repository\VoteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;

class CalculDesVotes
{
    /** @var EntityManagerInterface */
    private $entityManager;

    /** @var VoteRepository */
    private $voteRepo;


    public function __construct(EntityManagerInterface $entityManager, VoteRepository $voteRepo)
    {
        $this->entityManager = $entityManager;
        $this->voteRepo = $voteRepo;
    }

    /**
     * @return array
     * @throws NoResultException
     * @throws NonUniqueResultException
     */
    public function calculerLesVotes(){

        $retour = [
            'afriqueDuSud'=> 0,
            'jordanie'=> 0,
            'islande'=> 0,
            'norvege' => 0
        ];

        $em = $this->entityManager;

        $totalVote1 = $this->voteRepo->createQueryBuilder('v')
            ->select('count (v)')
            ->where('v.destination = 1')
            ->getQuery()
            ->getSingleScalarResult();
        $retour ['afriqueDuSud'] = $totalVote1;

        $totalVote2 = $this->voteRepo->createQueryBuilder('v')
            ->select('count (v)')
            ->where('v.destination = 2')
            ->getQuery()
            ->getSingleScalarResult();
        $retour ['jordanie'] = $totalVote2;

        $totalVote3 = $this->voteRepo->createQueryBuilder('v')
            ->select('count (v)')
            ->where('v.destination = 3')
            ->getQuery()
            ->getSingleScalarResult();
        $retour ['islande'] = $totalVote3;

        $totalVote4 = $this->voteRepo->createQueryBuilder('v')
            ->select('count (v)')
            ->where('v.destination = 4')
            ->getQuery()
            ->getSingleScalarResult();
        $retour ['norvege'] = $totalVote4;


        return $retour;
    }



}