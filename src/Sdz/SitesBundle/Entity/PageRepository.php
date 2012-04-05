<?php

namespace Sdz\SitesBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PageRepository
 *
 */
class PageRepository extends EntityRepository
{
    public function getAllPages($user, $site)
    {
        
        $qb = $this->createQueryBuilder('p')
                ->join('p.site', 's')
                ->addSelect('partial s.{id, name, url}');
        
         $qb->where('s.url = :site')
                ->setParameter('site', $site)
            ->andWhere('s.User = :user')
                ->setParameter('user', $user)
            ->andWhere('p.deleted = false');
        
        return $qb->getQuery()->getResult();
    }
    
    public function getPage($user, $site, $name)
    {
        $qb = $this->createQueryBuilder('p')
                ->join('p.site', 's')
                ->addSelect('partial s.{id, name, url}');
        
        $qb->where('s.url = :site')
                ->setParameter('site', $site)
           ->andWhere('s.User = :user')
                ->setParameter('user', $user)
            ->andWhere('p.name = :name')
                ->setParameter('name', $name)
            ->andWhere('p.deleted = false');
        
        return $qb->getQuery()->getSingleResult();
                        
    }
    
    public function getHomePage($user, $site)
    {
        $qb = $this->createQueryBuilder('p')
                ->join('p.site', 's')
                ->addSelect('partial s.{id, name, url}');
        
        $qb->where('s.url = :site')
                ->setParameter('site', $site)
           ->andWhere('s.User = :user')
                ->setParameter('user', $user)
            ->andWhere('p.home = true');
        
        return $qb->getQuery()->getSingleResult();
                        
    }
}