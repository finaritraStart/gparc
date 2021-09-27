<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author fy
 */
class indexController extends controller {
  /**
     * @Route("/index", name="dex")
     */
    public function indexAction(Request $request)
    {
      
      
        return $this->render('default/index.php', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    public function pageAction(){
         $pages=scandir('pages/');
    
/* @var $_GET type */
if(isset($_GET['page'])&& !empty($_GET['page']) && in_array($_GET['page'].'.php',$page)){
        $page=$_GET['page'];
    }else{
        $page='home';
        
    }
    }
}
