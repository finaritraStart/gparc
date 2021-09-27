<?php


namespace AppBundle\Controller;
use AppBundle\Entity\Maintenance;
use AppBundle\Form\MaintenanceType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
/**
 * @author fy
 */
class maintenanceController extends controller{
   /**
     * @Route("/ajmaintenance", name="ajmaintenance")
     */
      public function MaintenanceAction(Request $request)
    {
       $Maintenance=new Maintenance;
      
    
       $form=$this->createForm(MaintenanceType::class,$Maintenance);
      
        return $this->render('default/AjoutMaintenance.html.twig', array('form'=>$form->createView()));
          
    }
}
