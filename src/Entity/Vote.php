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
     * @ORM\ManyToOne(targetEntity="Destination", inversedBy="votes", cascade={"persist"})
     */
    private $destination;



    //#################### CONSTRUCTOR #####################################


    /**
     * Vote constructor.
     */
    public function __construct() {
        $this->user = $this->getUser();
        $this->destination = $this->getDestination();
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
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param mixed $destination
     */
    public function setDestination($destination): void
    {
        $this->destination = $destination;
    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    



}
