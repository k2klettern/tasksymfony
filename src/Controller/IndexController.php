<?php

namespace App\Controller;

use App\Entity\SCategories;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class IndexController extends Controller
{
	/**
	 * @Route("/", name="index")
	 */
	public function index()
	{
		$result = array();
		$categs = $this->getDoctrine()
		             ->getRepository(SCategories::class)
		             ->findByActive(1);
		foreach ($categs as $key => $cat) {
			$result[$key]['uri'] = "images/" . $cat->getImage();
			$result[$key]['catid'] = $cat->getID();
			$result[$key]['description'] = $cat->getDescription();
			/* $cats .= "<li><a href='kategorie/" . $cat->getID() . "'><img width='50' src='" . $uri . "'>". $cat->getDescription() ."</a></li>"; */
		}

		return $this->render('index.html.twig', array('cats' => $result));
	}

	/**
	 * @Route("/backend", name="backend")
	 */
	public function admin()
	{
		return $this->render('Backend/index.html.twig');
	}

}