<?php

namespace App\LouvreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use App\LouvreBundle\form\TicketType;

class TicketType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('name',            TextType::class)
			->add('firstName',            TextType::class)
			->add('pays',   CountryType::class, [
				'label'             => 'Pays',
				'preferred_choices' => ['FR'],
			])
			->add('birthDate', BirthdayType::class, [
				'label'    => 'Date de naissance',
				'format'=> 'ddMMMyyyy',

			])
			->add('lowRate',  CheckboxType::class,[
				'required' => false,
			]);

	}
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'App\LouvreBundle\Entity\Ticket'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_louvrebundle_ticket';
    }


}
