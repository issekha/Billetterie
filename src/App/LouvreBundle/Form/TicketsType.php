<?php

namespace App\LouvreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TicketsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',      TextType::class, ['label'        => 'Nom'])
            ->add('firstName', TextType::class, ['label'        => 'Prénom'])
            ->add('pays',   CountryType::class, [
                'label'             => 'Pays',
                'preferred_choices' => ['FR'],
            ])
            ->add('birthDate', BirthdayType::class, ['label'    => 'Date de naissance'])
            ->add('lowRate',   CheckboxType::class, [
                'required' => false,
                'label'    => 'Tarif réduit',
                'attr'     => ['class' => 'lowRate-info'],
            ])
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\LouvreBundle\Entity\Ticket'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_louvrebundle_ticket';
    }


}
