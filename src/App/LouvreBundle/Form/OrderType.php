<?php

namespace App\LouvreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class OrderType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('visitDate',         DateType::class, [
                'label' => 'Date de visite',
                'data'  => new \Datetime(),
                'years' => range(date('Y'), date('Y') + 2),
            ])
            ->add('ticketsType',       ChoiceType::class, [
                'choices'  => [
                    'journée'      => 1,
                    'demi-journée' => 2,
                ],
                'label'    => 'Type de billets'
            ])
            ->add('nbTickets',         ChoiceType::class, [
                'placeholder' => 'Choisir une quantité',
                'choices'     => array_combine(range(1,10),range(1,10)),
                'label'       => 'Nombre de ticket(s)',
                'mapped'      => false,
            ])
            
            ->add('tickets', CollectionType::class, array(
            'entry_type' => TicketType::class
        	))
			
			->add('Valider',              SubmitType::class)
			
			;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\LouvreBundle\Entity\Order'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_louvrebundle_order';
    }
}
