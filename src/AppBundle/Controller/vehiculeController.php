<?php


namespace AppBundle\Controller;
use AppBundle\Entity\vehicule;
use AppBundle\Form\vehiculeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
/**
 * @author fy
 */
class vehiculeController extends controller{
   /**
     * @Route("/ajvehicule", name="ajvehicule")
     */
      public function vehiculeAction(Request $request)
    {
       $vehicule=new vehicule;
      
    
       $form=$this->createForm(vehiculeType::class,$vehicule);
      
        return $this->render('default/vehiculeAjout.html.twig', array('form'=>$form->createView()));
          
    }
}
