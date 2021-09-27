<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class vehiculeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('immatricule',TextType::class, array('label'=>'immatricule'))
                ->add('marque',TextType::class, array('label'=>'marque'))
                ->add('modele',TextType::class, array('label'=>'modele'))
                ->add('genre',TextType::class, array('label'=>'genre'))
                ->add('puissance',TextType::class, array('label'=>'puissance'))
                ->add('designation',TextType::class, array('label'=>'designation'))
                ->add('dateAcquisition',DateType::class, array('label'=>'date acquisition'))
                ->add('etatDuVehicule',TextType::class, array('label'=>'etat du vehicule'))
                ->add('consommationKm',TextType::class, array('label'=>'consommation en Km'))
                ->add('couleur',TextType::class, array('label'=>'couleur'))
                ->add('nombreDePorte',TextType::class, array('label'=>'nombre de porte'))
                ->add('nombreDePlace',TextType::class, array('label'=>'nombre de place'))
                ->add('poidsMaximalSupportable',TextType::class, array('label'=>'poids maximal supportable'))
                ->add('Enregistrer',SubmitType::class, array('label'=>'Enregistrer'))
                ->add('Modifier',SubmitType::class, array('label'=>'Modifier'))
               
                
                ->add('Nouveau',SubmitType::class, array('label'=>'Nouveau'));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\vehicule'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_vehicule';
    }


}
