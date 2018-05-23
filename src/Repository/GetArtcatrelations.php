<?php

namespace App\Repository;

use App\Entity\SArtcatRelationships;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class GetArtcatrelations extends ServiceEntityRepository
{
	public function __construct(RegistryInterface $registry)
	{
		parent::__construct($registry, SArtcatRelationships::class);
	}

	/**
	 * @return Artsid[]
	 */
	public function findByCategoryId($catid): array
	{
		$qb = $this->createQueryBuilder('p')
		            ->Where('p.category_id = :catid')
					->setParameter('catid', $catid)
		            ->getQuery();

		return $qb->execute();
	}


}