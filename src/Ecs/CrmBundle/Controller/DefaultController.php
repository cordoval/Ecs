<?php

namespace Ecs\CrmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('EcsCrmBundle:Default:index.html.twig', array());
    }
}
