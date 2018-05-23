<?php

namespace App\Controller;

use App\Entity\SCategories;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class IndexController extends Controller
{
	/**
	 * @Route("/", name="index")
	 */
	public function index()
	{
		$catarray = array();
		$categs = $this->getDoctrine()
		             ->getRepository(SCategories::class)
		             ->findByActive(1);
		$cats = "<ul>";
		foreach ($categs as $cat) {
			$uri = "images/" . $cat->getImage();
			$cats .= "<li><a href='kategorie/" . $cat->getID() . "'><img width='50' src='" . $uri . "'>". $cat->getDescription() ."</a></li>";
		}
		$cats .= "</ul>";

		return $this->render('index.html.twig', array('cats' => $cats));
	}

	/**
	 * @Route("/admin", name="admin")
	 */
	public function admin()
	{
		return $this->render('Admin/index.html.twig');
	}

}