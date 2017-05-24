<?php

namespace GP\PawegoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('GPPawegoBundle:Default:index.html.twig', array("title"=>"Welcome at PaweGo.com"));
    }
    public function frontAction()
    {
        return $this->render('GPPawegoBundle:Default:front.html.twig');
    }
}
