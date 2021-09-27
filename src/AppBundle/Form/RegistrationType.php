<?php

namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Test\FormBuilderInterface;

class RegistrationType extends AbstractType {
  public function builderForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options){
      $builder
              ->add('companieName')
              ->add('fonction')
        ;
  } 
  public function getParent(){
      return 'fos_user_registration';
  }
  public function getName(){
      return'user_registration';
  }
}
