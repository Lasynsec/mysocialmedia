<?php

namespace Lasynsec\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class StaticController extends Controller
{
    public function homepageAction()
    {
     	return $this->render('LasynsecFrontBundle:Static:homepage.html.twig');
    }

    public function aboutAction()
    {
    		return $this->render('LasynsecFrontBundle:Static:about.html.twig');
    }
}
