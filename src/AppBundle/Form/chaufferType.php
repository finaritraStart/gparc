<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class chaufferType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('cINChauffer')
                ->add('nomChauffer')
                ->add('prenomChauffer')
                ->add('numPermisConduire')
                ->add('dteDeNaissance')
                ->add('fonction')
                ->add('adresse')
                ->add('mobile')
                ->add('adresseMail')
                ->add('imageChauffeur',ImageType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\chauffer'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_chauffer';
    }


}
