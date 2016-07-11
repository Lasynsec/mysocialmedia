<?php

namespace Lasynsec\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\FrontBundle\Entity\Status;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class TimelineController extends Controller
{
	public function timelineAction()
	{
		$em = $this->getDoctrine()->getManager(); 
		$statuses = $em->getRepository('LasynsecFrontBundle:Status')->findAll();

		return $this->render('LasynsecFrontBundle:Timeline:timeline.html.twig', array(
			'statuses' => $statuses 
		));
	}
}
