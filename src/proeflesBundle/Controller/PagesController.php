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

		/**
		 * @Route("/reg", name="regestration")
		 */

	public function index2action()
{
	return$this->render('pages/registration.html.twig');
}

	public function index3action()
	{
		return$this->render('pages/congratzz.html.twig');
	}

}


