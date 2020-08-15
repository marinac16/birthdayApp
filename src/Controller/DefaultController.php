<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Vote;
use App\Form\InscriptionType;
use App\Form\VoteType;
use App\Repository\DestinationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class DefaultController extends AbstractController
{
//    /** @var DestinationRepository */
//    private $destinationRepo;
//
//    public function __construct(DestinationRepository $destinationRepo)
//    {
//        $this->destinationRepo = $destinationRepo;
//    }
//
//    /**
//     * @Route("/", name="index")
//     */
//    public function index()
//    {
//
//        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');
//
//        $user = $this->getUser();
//
//        return $this->render('default/index.html.twig', [
//            'user' => $user,
//
//        ]);
//    }
//
//    /**
//     * @Route("/choisi-la-destination", name="choix")
//     * @param Request $request
//     * @param EntityManagerInterface $em
//     * @return Response
//     */
//    public function AfficherChoix(Request $request, EntityManagerInterface $em)
//    {
//        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');
//
//        $vote = new Vote();
//
//        $user = $this->getUser();
//
//
//        $form = $this->createForm(VoteType::class, $vote);
//
//        $form->handleRequest($request);
//        if ($form->isSubmitted() && $form->isValid()) {
//
//            $vote->setUser($user);
//
//            $em->persist($vote);
//            $em->flush();
//
//            if ($em)
//
//
//            return $this->redirectToRoute('remerciement', []);
//
//        }
//
//        return $this->render('default/choix.html.twig', [
//            'form'=> $form->createView(),
//        ]);
//
//    }
//
//    /**
//     * @Route("/remerciement", name="remerciement")
//     */
//    public function AfficherRemerciement()
//    {
//
//        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');
//
//        return $this->render('default/remerciement.html.twig', [
//
//        ]);
//
//    }
//
//    /**
//     * @Route("/error", name="error")
//     */
//    public function AfficherError()
//    {
//
//        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');
//
//        return $this->render('default/error.html.twig', [
//
//        ]);
//
//    }
//
//    /**
//     * @Route("/inscription", name="inscription")
//     * @param Request $request
//     * @param EntityManagerInterface $em
//     * @param UserPasswordEncoderInterface $encoder
//     * @return Response
//     */
//    public function Inscription(Request $request, EntityManagerInterface $em, UserPasswordEncoderInterface $encoder)
//    {
//
//        $user = new User();
//
//        $userForm = $this->createForm(InscriptionType::class, $user);
//        $userForm->handleRequest($request);
//
//        if ($userForm->isSubmitted() && $userForm->isValid()){
//
//            $hashed = $encoder->encodePassword($user, $user->getPassword());
//            $user->setPassword($hashed);
//
//
//
//            $em->persist($user);
//            $em->flush();
//
//            return $this->redirectToRoute('inscription');
//        }
//
//
//
//        return $this->render('default/inscription.html.twig', [
//            'form'=>$userForm->createView()
//        ]);
//
//    }


}
