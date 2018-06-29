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
		$result = array();
		$categs = $this->getDoctrine()
		               ->getRepository(SCategories::class)
		               ->findByActive(1);
		foreach ($categs as $key => $cat) {
			$result[$key]['uri'] = "images/" . $cat->getImage();
			$result[$key]['catid'] = $cat->getID();
			$result[$key]['description'] = $cat->getDescription();
		}

		return $this->render('index.html.twig', array('cats' => $result));
	}

	/**
	 * Matches /kategorie/*
	 *
	 * @Route("/kategorie/{catid}", name="kategorie_show")
	 */
	public function show($catid)
	{
		$result = array();
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

		foreach ($artkls as $key => $cat) {
			$result[$key]['name'] = $cat->getName();
			$result[$key]['description'] = $cat->getDescription();
			$result[$key]['shippingtime'] = $cat->getShippingTime();
			$result[$key]['date'] = $cat->getDatum()->format('Y-m-d');
			$result[$key]['price'] = $cat->getPrice();
			$result[$key]['stock'] = $cat->getStock();
		}

		return $this->render('catid.html.twig', array('artikles' => $result));
	}

}