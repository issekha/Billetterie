<?php

namespace App\LouvreBundle\Repository;

/**
 * OrderRepository
 */
class OrderRepository extends \Doctrine\ORM\EntityRepository
{
	public function limitationReservation($date)
	{

		$qb = $this
			->createQueryBuilder('t')
			->select('SUM(t.ticketsNbr)')
			->where('t.visitDate = :date')
			->setParameter('date', $date)
		;

		return $qb->getQuery()->getSingleScalarResult();

	}
}
