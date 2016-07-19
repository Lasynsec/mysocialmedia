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

	public function userTimelineAction($userId)
	{
		$em = $this->getDoctrine()->getManager();
		// Let's get the user's id.
		$user = $em->getRepository('LasynsecFrontBundle:User')->findOneById($userId);

		if(!$user){ // if the user is not there.
			$this->createNotFoundException("The user doesn't exist");
		}

		// Let's get all statues's user.
		$statuses = $em->getRepository('LasynsecFrontBundle:Status')->find(array(
			'user' => $user,
			'deleted'=> false
			)
		);

		return $this->render('LasynsecFrontBundle:Timeline:user_timeline.html.twig');
	}
}
