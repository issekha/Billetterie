<?php

namespace App\LouvreBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use App\LouvreBundle\entity\Order;

/**
 * @ORM\Table(name="app_ticket")
 * @ORM\Entity(repositoryClass="App\LouvreBundle\Repository\TicketRepository")
 */
class Ticket
{
  /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Votre nom doit au moins avoir une lougueur de 2 caractères",
     *      maxMessage = "Votre nm ne peut pas avoir plus de 50 caractères"
     * )
     * @Assert\NotBlank(message="Ce champ ne peux pas être vide")
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="firstName", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Votre prénom doit au moins avoir une lougueur de 2 caractères",
     *      maxMessage = "Votre prénom ne peut pas avoir plus de 50 caractères"
     * )
     * @Assert\NotBlank(message="Ce champ ne peux pas être vide")
     */
    private $firstName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="datetime")
     * @Assert\NotBlank(message="Ce champ ne peux pas être vide")
     * @Assert\Date(message="Date non valide")
     */
    private $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var bool
     *
     * @ORM\Column(name="lowRate", type="boolean")
     */
    private $lowRate;

    /**
     * @var int
     *
     * @ORM\Column(name="ticketsRate", type="integer")
     */
    private $ticketsRate;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=true)
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity="Order", inversedBy="tickets")
     */
    private $order;
	
	/**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\Email(message = "Ceci n’est pas une adresse email valide")
     * @Assert\NotBlank(message="Ce champ ne peux pas être vide")
     */
    private $email;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Ticket
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Ticket
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return Ticket
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set lowRate
     *
     * @param boolean $lowRate
     *
     * @return Ticket
     */
    public function setLowRate($lowRate)
    {
        $this->lowRate = $lowRate;

        return $this;
    }

    /**
     * Get lowRate
     *
     * @return bool
     */
    public function getLowRate()
    {
        return $this->lowRate;
    }

    /**
     * Set ticketsRate
     *
     * @param integer $ticketsRate
     *
     * @return Ticket
     */
    public function setTicketsRate($ticketsRate)
    {
        $this->ticketsRate = $ticketsRate;

        return $this;
    }

    /**
     * Get ticketsRate
     *
     * @return int
     */
    public function getTicketsRate()
    {
        return $this->ticketsRate;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Ticket
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set order
     *
     * @param \MK\LouvreBundle\Entity\Order $order
     *
     * @return Ticket
     */
    public function setOrder(\MK\LouvreBundle\Entity\Order $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \MK\LouvreBundle\Entity\Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Ticket
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }
	
	/**
     * Set email
     *
     * @param string $email
     *
     * @return Order
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}

