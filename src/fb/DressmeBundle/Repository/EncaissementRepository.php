<?php

namespace fb\DressmeBundle\Repository;

/**
 * EncaissementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EncaissementRepository extends \Doctrine\ORM\EntityRepository
{
		public function findEncaissement()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT e FROM DressmeBundle:Encaissement e '
            )
            ->getResult();
    }
}
