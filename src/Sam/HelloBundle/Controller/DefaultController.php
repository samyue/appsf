<?php

namespace Sam\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SamHelloBundle:Default:index.html.twig', array('name' => $name));
    }
}
