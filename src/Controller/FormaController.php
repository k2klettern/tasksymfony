<?php
namespace App\Controller;

use App\Entity\SArticles;
use App\Entity\SCategories;
use App\Entity\SArtcatRelationships;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FormaController extends Controller
{
	/**
	 * @Route("/backend/new", name="new_registration")
	 */
	public function new(Request $request)
	{
		// creates a task and gives it some dummy data for this example
		$task = new SArticles();
		$task->setDatum(new \DateTime('now'));
		$task->setActive(1);
		$task->setTopseller(1);
		$task->setChangetime(new \DateTime('now'));

		$form = $this->createFormBuilder($task)
					->add('name', TextType::class)
					->add('description', TextareaType::class, array('label' => 'Beschreibung'))
					->add('shippingtime', TextType::class, array('label' => 'Lieferdauer'))
					->add('price', MoneyType::class, array('label' => 'Preis'))
					->add('stock', IntegerType::class, array('label' => 'Stock'))
					->add('cats', ChoiceType::class, array(
							'choices'  => $this->getParentCats(),
							'label' => 'Kategorien',
							'expanded' => true,
							'multiple' => true
						)
					)
		            ->add('save', SubmitType::class, array('label' => 'Artikel speichern'))
		            ->getForm();

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			$task = $form->getData();
			$cats = $task->cats;
			unset($task->cats);
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($task);
			$entityManager->flush();

			$id = $task->getId();

			$this->saveCategories($cats, $id);

			return $this->redirectToRoute('admin');
		}

		return $this->render('Backend/forma.html.twig', array(
			'form' => $form->createView(),
		));
	}

	public function saveCategories($cats, $id) {
		foreach ( $cats as $cat ) {
			$task = new SArtcatRelationships();
			$task->setArticleId($id);
			$task->setCategoryId($cat);
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist( $task );
			$entityManager->flush();
		}
	}

	private function getParentCats() {
		$catarray = array();
		$cats = $this->getDoctrine()
		             ->getRepository(SCategories::class)
		             ->findByActive(1);
		foreach ($cats as $cat) {
			$catarray[$cat->getDescription()] = $cat->getID();
		}

		return $catarray;
	}

}