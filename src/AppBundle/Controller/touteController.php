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

class touteController extends Controller
{
    /**
     * @Route("/toute", name="toute")
     */
    public function touteAction(Request $request)
    {
        return $this->render('default/toute.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
      $user = new vehicule();
        $form = $this->createForm(vehiculeType::class, $vehicule);
    }



        }    

