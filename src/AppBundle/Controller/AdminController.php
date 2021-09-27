<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class AdminController extends BaseAdminController
{
    /**
     * @Route("/dashboard", name="admin_dashboard")
     */
    public function dashboard()
    {
        return $this->render('views/dashboard.html.twig');
    }
}
