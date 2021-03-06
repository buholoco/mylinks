<?php

namespace Buho\MylinksBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * LinkRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LinkRepository extends EntityRepository
{
    public function getLatestLinks($limit = null)
    {
        $qb = $this->createQueryBuilder('l')
                   ->select('l')
                   ->addOrderBy('l.created', 'DESC');
        
        if (false === is_null($limit)) {
            $qb->setMaxResults($limit);
        }
        
        return $qb->getQuery()
                  ->getResult();
    }
}
