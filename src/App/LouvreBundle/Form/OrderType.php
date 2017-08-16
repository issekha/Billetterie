<?php

namespace App\LouvreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class OrderType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('visitDate',  DateType::class, [
				'widget' => 'single_text',
				'html5' => false,
				'format' => 'dd/MM/yyyy',
				'attr' => ['class' => 'datepicker']
			])

			->add('ticketsType',     ChoiceType::class, [
				'choices' => [
					'Journée'  => 1,
					'Demi-journée' => 2,
				]
			])

			->add('ticketsNbr',         ChoiceType::class, [

					'choices'     => array_combine(range(1,10),range(1,10)),
					'label'       => 'Nombre de ticket(s)',
				 ])

			->add('email',     EmailType::class)

			->add('tickets', CollectionType::class, [
				'entry_type' => TicketType::class,
				'label_attr'=>['class'=> 'ticketsList']
        	]);
    }

    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => 'App\LouvreBundle\Entity\Order']);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_louvrebundle_order';
    }


}
