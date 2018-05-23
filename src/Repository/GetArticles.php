<?php

namespace App\Repository;

use App\Entity\SArticles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class GetArticles extends ServiceEntityRepository
{
	public function __construct(RegistryInterface $registry)
	{
		parent::__construct($registry, SArtcatRelationships::class);
	}

	/**
	 * @return Artsid[]
	 */
	public function findById($artids): array
	{
		$qb = $this->createQueryBuilder('p');

		foreach ($artids as $id) {
			$qb->orWhere("p.id = :id ")
			   ->setParameter('id', $id);
		}
		    $qb->getQuery();

		return $qb->execute();
	}


}