<?php

namespace AppBundle\Controller;
use AppBundle\Entity\chauffer;
use AppBundle\Form\chaufferType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author fy
 */
class chauffeurController extends controller {
  /**
     * @Route("/chauffeur", name="chauffeur")
     */
    public function indexAction(Request $request)
    {
       $chauffer=new chauffer;
      
    
       $form=$this->createForm(chaufferType::class,$chauffer);
      
        return $this->render('default/interfaceChauffeur.html.twig', array('form'=>$form->createView()));
          
    }
}
