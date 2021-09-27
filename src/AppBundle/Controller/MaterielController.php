<?php


namespace AppBundle\Controller;
use AppBundle\Entity\Materiel;
use AppBundle\Form\MaterielType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
/**
 * @author fy
 */
class MaterielController extends controller{
   /**
     * @Route("/ajmateriel", name="ajmateriel")
     */
      public function MaterielAction(Request $request)
    {
       $Materiel=new Materiel;
      
    
       $form=$this->createForm(MaterielType::class,$Materiel);
      
        return $this->render('default/AjoutMateriel.html.twig', array('form'=>$form->createView()));
          
    }
}

