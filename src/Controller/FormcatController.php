<?php
namespace App\Controller;

use App\Entity\SCategories;
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
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class FormcatController extends Controller
{

	/**
	 * @Route("/backend/newcat", name="newcat_registration")
	 */
	public function newcat(Request $request)
	{
		// creates a task and gives it some dummy data for this example
		$task = new SCategories();
		$task->setActive(1);

		$form = $this->createFormBuilder($task)
					 ->add('parent', ChoiceType::class, array(
							'choices'  => $this->getParentCats(),
							'placeholder' => 'Wähle eine Option',
							 'label' => 'Eltern-Kategorie',
							'required' => false
						)
						)
					 ->add('image', FileType::class, array('label' => 'Kat img'))
		             ->add('description', TextareaType::class, array('label' => 'Beschreibung'))
		             ->add('save', SubmitType::class, array('label' => 'Kategorie speichern'))
		             ->getForm();

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$file = $task->getImage();
			$fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
			$file->move(
				$this->getParameter('images.directory'),
				$fileName
			);

			$task = $form->getData();
			$task->setImage($fileName);

			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($task);
			$entityManager->flush();

			return $this->redirectToRoute('admin');
		}

		return $this->render('Backend/formcat.html.twig', array(
			'form' => $form->createView(),
		));
	}

	private function getParentCats() {
		$catarray = array();
		$cats = $this->getDoctrine()
		                 ->getRepository(SCategories::class)
		                 ->findByParent(null);
		foreach ($cats as $cat) {
			$catarray[$cat->getDescription()] = $cat->getID();
		}

		return $catarray;
	}

	/**
	 * @return string
	 */
	private function generateUniqueFileName()
	{
		return md5(uniqid());
	}
}