<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VoteRepository")
 */
class Vote
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="User")
     */
    private $user;


    /**
     * @ORM\ManyToOne(targetEntity="Destination", inversedBy="Vote")
     */
    private $destinations;

    //#################### CONSTRUCTOR #####################################


    public function __construct() {
        $this->user = $this->getUser();
    }


    //#################### GETTER/SETTER #####################################


    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getDestinations()
    {
        return $this->destinations;
    }

    /**
     * @param mixed $destinations
     */
    public function setDestinations($destinations): void
    {
        $this->destinations = $destinations;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    



}
