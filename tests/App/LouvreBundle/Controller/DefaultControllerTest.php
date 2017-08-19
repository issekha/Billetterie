<?php

namespace Tests\App\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\LouvreBundle\Entity\Order;
use App\LouvreBundle\Form\OrderType;
use App\LouvreBundle\Entity\Ticket;
use App\LouvreBundle\Form\TicketType;
use App\LouvreBundle\Form\TicketsListType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;


class DefaultControllerTest extends KernelTestCase
{

    private $form;
    private $container;

    public function setUp()
    {
        self::bootKernel();

        $this->container = self::$kernel->getContainer();
    }

    public function testOrder(){

    	$order = new Order();
    	$order->setEmail('dsetdb@gmail.com');
    	$order->setVisitDate(new \DateTime('2017/07/22'));
    	$order->setTicketsType(1);
    	$order->setTicketsNbr(10);
    	$order->setOrderCode('chdgh545dFD');


    	$this->assertContainsOnly('datetime', [$order->getVisitDate()]);
        $this->assertContainsOnly('int', [$order->getTicketsType(), $order->getTicketsNbr()]);
        $this->assertContainsOnly('string', [$order->getEmail(), $order->getOrderCode()]);


    }

    public function testTicket()
        {
            $ticket = new Ticket();
            $ticket->setName('Martin');
            $ticket->setFirstName('jager');
            $ticket->setBirthDate(new \DateTime('1977/10/10'));
            $ticket->setPays('France');
            $ticket->setLowRate(FALSE);
            $ticket->setTicketsRate(2);
            $ticket->setPrix('16');

            $this->assertEquals('martin', $ticket->getName());
            $this->assertEquals('jager', $ticket->getFirstName());
            $this->assertEquals('France', $ticket->getPays());
            $this->assertEquals(new \DateTime('1977/10/10'), $ticket->getBirthDate());
            $this->assertEquals(FALSE, $ticket->getLowRate());
            $this->assertEquals('16', $ticket->getPrix());
        }

    public function testTicketNull()
        {
            $order = new Order();

     
            $i = 0;
            while ($i != 3){
     
                $ticket = new Ticket();
                $ticket->setOrder($order);
                $ticket->setName('martin');
                $ticket->setFirstName('jager');
                $ticket->setBirthDate('1977/10/10');
                $ticket->setPays('France');
                $ticket->setLowRate(FALSE);
                $ticket->setTicketsRate(2);
                $ticket->setPrix(12);
                $order->getTickets()->add($ticket);
               
     
                $i++;  
            }
     
            $this->assertNotNull($ticket->getOrder());
     


        }

    public function testOrderForm()
    {
        $date = new \DateTime('2018/07/22');
        $result = $date->format('Y-m-d H:i:s');

        $formData = array(
            'email'         => 'notoriousbully@gmail.com',
            'visitDate' => $result,
            'ticketsType'      => 1,
            'ticketsNbr'      => 1,
            );

        $this->form = $this->container->get('form.factory');
        $form = $this->form->create(OrderType::class, null);

        $object = $formData;

        // submit the data to the form directly
        $form->submit($formData);

        // test que les informations transmise au formulaire n'ont pas échoué après validation
        $this->assertTrue($form->isSynchronized());

        // vérification de la création du formView
        $view = $form->createView();
        $children = $view->children;

        foreach (array_keys($formData) as $key) {
            $this->assertArrayHasKey($key, $children);
        }

    }
}
