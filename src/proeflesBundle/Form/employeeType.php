<?php

namespace proeflesBundle\Form;

use proeflesBundle\Entity\location;
use proeflesBundle\proeflesBundle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class employeeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('street')
            ->add('streetNumber')
            ->add('city')
            ->add('country')
            ->add('cityOfBirth')
            ->add('countryOfBirth')
            ->add('email')
            ->add('station', EntityType::class, array(
                'class' => 'proeflesBundle\Entity\location',
                'choice_label' => 'name'
                ))
            ->add('department')
            ->add('telephonenumber')
            ->add('date_of_birth',DateType::class, [ 'years' => range(date('Y') -100, date('Y')),]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'proeflesBundle\Entity\employee'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'proeflesbundle_employee';
    }


}
