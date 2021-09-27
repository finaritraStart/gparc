<?php


namespace AppBundle\Controller;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
/**
 * @author fy
 */
class listMissionController extends controller{
   /**
     * @Route("/listMission", name="listMission")
     */
      public function rechercheAction(Request $request)
    {
       $em=$this->getDoctrine()->getManager();
       $motcle=$request->get('mot_cle');
       $resultat=1;
       $User=$em->getRepository('AppBundle:User')->findBy(array('username'=>$motcle));
       $role=app.user.roles;
       if($User==null){
           $resultat=0;
       }
       return $this->render('listeMission.html.twig', array('User'=>$User,'resultat'=>$resultat,'role'=>$role));
     
    }
}
