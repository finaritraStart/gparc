<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Mission;
use AppBundle\Form\MissionType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author fy
 */
class ajoutMissionController extends controller {
  /**
     * @Route("/ajMission", name="ajMission")
     */
    public function MissionAction(Request $request)
    {
       $Mission=new Mission;
      
    
       $form=$this->createForm(MissionType::class,$Mission);
      if($form->isSubmitted() && $form->isValid()){
          $nextAction=$form->get('saveAndAdd')->isClicked()
                  ? 'task_new'
                  : 'task_success';
          return $this->redirectToRoute($nextAction);
      }
        return $this->render('default/ajoutMission.html.twig', array('form'=>$form->createView()));
    
    }
}
