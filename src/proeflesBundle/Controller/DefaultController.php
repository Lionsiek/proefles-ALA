<?php

namespace proeflesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
//    public function indexAction()
//    {
//        return $this->render('proeflesBundle:Default:index.html.twig');
//    }

	public function indexAction()
	{
		if ($this->isGranted('ROLE_USER') == false) {
			return $this->redirectToRoute('fos_user_security_login');
		} else {

			return $this->render('proeflesBundle:Default:index.html.twig');
		}
	}

}
