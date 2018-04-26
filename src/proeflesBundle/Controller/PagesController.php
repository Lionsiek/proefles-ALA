<?php

namespace proeflesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PagesController extends Controller
{
	/**
	 * @Route("/pick", name="picklocations")
	 */
//    public function indexAction()
//    {
//        return $this->render('proeflesBundle:Default:index.html.twig');
//    }

	public function indexAction()
	{

			return $this->render('pages/picklocations.html.twig');
		}

}
