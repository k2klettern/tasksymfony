<?php
namespace App\Controller;

use App\Entity\SArtcatRelationships;
use App\Entity\SArticles;
use App\Entity\SCategories;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class KategorieController extends Controller
{
	/**
	 * Matches /kategorie exactly
	 *
	 * @Route("/kategorie", name="kategorie_list")
	 */
	public function list()
	{
		$catarray = array();
		$categs = $this->getDoctrine()
		               ->getRepository(SCategories::class)
		               ->findByActive(1);
		$cats = "<ul>";
		foreach ($categs as $cat) {
			$uri = "images/" . $cat->getImage();
			$cats .= "<li><a href='kategorie/" . $cat->getID() . "/'><img width='50' src='" . $uri . "'>". $cat->getDescription() ."</a></li>";
		}
		$cats .= "</ul>";

		return $this->render('index.html.twig', array('cats' => $cats));
	}

	/**
	 * Matches /kategorie/*
	 *
	 * @Route("/kategorie/{catid}", name="kategorie_show")
	 */
	public function show($catid)
	{
		$artlist = array();
		$relations = $this->getDoctrine()
			->getRepository(SArtcatRelationships::class)
			->findByCategoryId($catid);

		$ids = array();
		foreach ($relations as $relation) {
			$idak = $relation->getArticleId();
			if(!in_array($idak, $ids))
			$ids[] = $idak;
		}

		$artkls = $this->getDoctrine()
		               ->getRepository(SArticles::class)
		               ->findById($ids);

		$arts = "<ul>";
		foreach ($artkls as $cat) {
			$arts .= "<li><ul>";
			$arts .= "<li>Name: " . $cat->getName() . "</li>";
			$arts .= "<li>Beschreibung: " . $cat->getDescription() . "</li>";
			$arts .= "<li>Lieferdauer: " .$cat->getShippingTime() . "</li>";
			$arts .= "<li>Datum: " . $cat->getDatum()->format('Y-m-d') . "</li>";
			$arts .= "<li>Preis: " . $cat->getPrice() . "</li>";
			$arts .= "<li>Stock: " . $cat->getStock() . "</li>";
			$arts .= "</ul></li><hr>";
		}
		$arts .= "</ul>";

		return $this->render('catid.html.twig', array('artikles' => $arts));
	}

}