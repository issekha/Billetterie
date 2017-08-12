<?php

namespace App\LouvreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Order
 *
 * @ORM\Table(name="app_order")
 * @ORM\Entity(repositoryClass="App\LouvreBundle\Repository\OrderRepository")
 */
class Order
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
     * @var \DateTime
     *
     * @ORM\Column(name="visitDate", type="datetime")
     * @Assert\NotBlank(message="Ce champ ne peux pas être vide")
     * @Assert\Date(message="Date non valide")
     */
    private $visitDate;

    /**
     * @var int
     *
     * @ORM\Column(name="ticketsType", type="integer")
     */
    private $ticketsType;

    /**
     * @var int
     *
     * @ORM\Column(name="ticketsNbr", type="integer")
     */
    private $ticketsNbr;

   
    /**
     * @var string
     *
     * @ORM\Column(name="orderCode", type="string", length=255)
     */
    private $orderCode;

    /**
     * @ORM\OneToMany(targetEntity="Ticket", mappedBy="order", cascade={"persist"})
     */
    private $tickets;


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
     * Set visitDate
     *
     * @param \DateTime $visitDate
     *
     * @return Order
     */
    public function setVisitDate($visitDate)
    {
        $this->visitDate = $visitDate;

        return $this;
    }

    /**
     * Get visitDate
     *
     * @return \DateTime
     */
    public function getVisitDate()
    {
        return $this->visitDate;
    }

    /**
     * Set ticketsType
     *
     * @param integer $ticketsType
     *
     * @return Order
     */
    public function setTicketsType($ticketsType)
    {
        $this->ticketsType = $ticketsType;

        return $this;
    }

    /**
     * Get ticketsType
     *
     * @return int
     */
    public function getTicketsType()
    {
        return $this->ticketsType;
    }

    /**
     * Set ticketsNbr
     *
     * @param integer $ticketsNbr
     *
     * @return Order
     */
    public function setTicketsNbr($ticketsNbr)
    {
        $this->ticketsNbr = $ticketsNbr;

        return $this;
    }

    /**
     * Get ticketsNbr
     *
     * @return int
     */
    public function getTicketsNbr()
    {
        return $this->ticketsNbr;
    }

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tickets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ticket
     *
     * @param \App\LouvreBundle\Entity\Ticket $ticket
     *
     * @return Order
     */
    public function addTicket(\App\LouvreBundle\Entity\Ticket $ticket)
    {
        $this->tickets[] = $ticket;

        return $this;
    }

    /**
     * Remove ticket
     *
     * @param \App\LouvreBundle\Entity\Ticket $ticket
     */
    public function removeTicket(\App\LouvreBundle\Entity\Ticket $ticket)
    {
        $this->tickets->removeElement($ticket);
    }

    /**
     * Get tickets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTickets()
    {
        return $this->tickets;
    }

    /**
     * Set orderCode
     *
     * @param string $orderCode
     *
     * @return Order
     */
    public function setOrderCode($orderCode)
    {
        $this->orderCode = $orderCode;

        return $this;
    }

    /**
     * Get orderCode
     *
     * @return string
     */
    public function getOrderCode()
    {
        return $this->orderCode;
    }
}
