<?php

namespace App\LouvreBundle\Repository;


class OrderRepository extends \Doctrine\ORM\EntityRepository
{
	public function orderLimit($date)
	{

		// Somme de tous les Nombre de billets vendu pour la date de visite
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
