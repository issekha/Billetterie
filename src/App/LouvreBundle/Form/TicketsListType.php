<?php
// src/LA/TicketingBundle/Form/Type/OrderType.php

namespace LA\TicketingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use App\LouvreBundle\Form\TicketsType;

class TicketsListType extends OrderType
{
     /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tickets', CollectionType::class, array(
            'entry_type' => TicketType::class,
            'constraints' => new \Symfony\Component\Validator\Constraints\Valid(),
            'attr' => array(
          'class' => 'tickets')
        ));
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
