<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class MissionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('typeDeMission',TextType::class, array('label'=>'type de mission'))
                ->add('objectif',TextType::class, array('label'=>'objectif'))
                ->add('nombreDeJours',TextType::class, array('label'=>'nombre de jours'))
                ->add('dateDepart',DateTimeType::class, array('label'=>'date de depart'))
                ->add('kilometrageDepart',TextType::class, array('label'=>'kilometrage de depart'))
                ->add('lieuArrive',TextType::class, array('label'=>'lieu arrivé'))
                ->add('dateDebut',DateTimeType::class, array('label'=>'date debut'))
                ->add('dateRetour',DateTimeType::class, array('label'=>'date retour'))
                ->add('kilometrageRetour',TextType::class, array('label'=>'kilometrage retour'))
                ->add('dateFin',DateTimeType::class, array('label'=>'date fin'))
                ->add('Enregistrer',SubmitType::class, array('label'=>'Enregistrer'))
                  ->add('Ajouter',SubmitType::class, array('label'=>'Ajouter'))
                
                 ->getForm();
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Mission'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_mission';
    }


}
