<?php
namespace AppBundle\Controller;
use AppBundle\Form\MaintenanceType;
use AppBundle\Form\AssuranceType;
use AppBundle\Form\MaterielType;
use AppBundle\Form\MissionType;
use AppBundle\Form\chaufferType;
use AppBundle\Form\vehiculeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
/**
 * @author fy
 */
class postController extends controller
{
 /**
     * @Route("/post", name="post")
     */
    public function postAction(Request $request)
    {
        return $this->render('default/post.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
        if ($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
     
                $em->persit($advert);
                $em->flush();
            }
        }
    }   
}
