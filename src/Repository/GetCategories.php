<?php

namespace App\Repository;

use App\Entity\SCategories;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class GetCategories extends ServiceEntityRepository
{
	public function __construct(RegistryInterface $registry)
	{
		parent::__construct($registry, SCategories::class);
	}

	/**
	 * @return Cats[]
	 */
	public function findByParent($parent): array
	{
		$qb = $this->createQueryBuilder('p')
					->select(array('p.description', 'p.id'))
		            ->Where('p.parent = :parent')
					->setParameter('parent', $parent)
		           ->getQuery();

		return $qb->execute();
	}

	/**
	 * Active should be 1 or null
	 *
	 * @return Cats[]
	 */
	public function findByActive($active): array
	{
		$qb = $this->createQueryBuilder('p')
		           ->select(array('p.description', 'p.id'))
		           ->Where('p.active = :active')
		           ->setParameter('active', $active)
		           ->getQuery();

		return $qb->execute();
	}



}