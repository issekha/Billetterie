<?php

namespace App\LouvreBundle\Repository;


class OrderRepository extends \Doctrine\ORM\EntityRepository
{
	public function OrderLimit($date)
	{


		$qb = $this->createQueryBuilder('a');

		$qb
		->select('SUM(a.ticketsNbr)')
		->where('a.visitDate = :date')
		   ->setParameter('date', $date)
		;

		return $qb
		->getQuery()
		->getResult()
		;


	}
}
