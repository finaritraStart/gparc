<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
class MaterielType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nomMaterielUtiliser',TextType::class, array('label'=>'Nom materiel utiliser'))
                ->add('designation',TextareaType::class, array('label'=>'designation'))
                ->add('quantite',TextType::class, array('label'=>'quantite'))
                ->add('prixMateriel',TextType::class, array('label'=>'prix materiel'))
                ->add('enregistrer',SubmitType::class,array('label'=>'Enregistrer'))
                 ->add('modifier',SubmitType::class,array('label'=>'Modifier'));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Materiel'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_materiel';
    }


}
