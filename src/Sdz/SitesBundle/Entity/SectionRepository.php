<?php

namespace Sdz\SitesBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * SectionRepository
 *
 */
class SectionRepository extends EntityRepository
{  
    public function getSections($user, $site_url, $name_page)
    {
        $qb = $this->createQueryBuilder('s')
                ->join('s.page', 'p', 'WITH', 'p.deleted = false')
                ->join('p.site', 'si');
        
        $qb->where('si.url = :site')
                ->setParameter('site', $site_url)
           ->andWhere('si.User = :user')
                ->setParameter('user', $user)
            ->andWhere('p.name = :name')
                ->setParameter('name', $name_page);
        
        $qb->orderBy('s.position', 'ASC');
        
        return $qb->getQuery()->getResult();
    }
    
    public function getHeader($user, $site, $deleted = false, $persisted = true)
    {
        $qb = $this->createQueryBuilder('m')
                ->leftJoin('m.links', 'l')
                ->join('m.site', 's')
                ->addSelect('l')
                ->addSelect('partial s.{id, url}');
        
        $qb->where('m.type = :type')
                ->setParameter('type', 'header')
            ->andWhere('s.url = :site')
                ->setParameter('site', $site)
            ->andWhere('s.User = :user')
                ->setParameter('user', $user);
        
        if(!$deleted)
        {
            $qb->andWhere('m.deleted = false');
        }
            
        if($persisted)
        {
            $qb->andWhere('m.persisted = true');
        }
        
        $qb->orderBy('m.position, l.position', 'ASC');
        
        return $qb->getQuery()->getSingleResult();
    }
    
    public function getSidebar($user, $site, $deleted = false, $persisted = true)
    {
        $qb = $this->createQueryBuilder('m')
                ->leftJoin('m.links', 'l')
                ->leftJoin('l.page', 'p', 'WITH', 'p.deleted = false')
                ->join('m.site', 's')
                ->addSelect('l')
                ->addSelect('partial s.{id, url}')
                ->addSelect('partial p.{id, name}')
                ;
        
        $qb->where('m.type = :type')
                ->setParameter('type', 'sidebar')
            ->andWhere('s.url = :site')
                ->setParameter('site', $site)
            ->andWhere('s.User = :user')
                ->setParameter('user', $user)
            ->andWhere('p.deleted = false');
        
        if(!$deleted)
        {
            $qb->andWhere('m.deleted = false');
        }
            
        if($persisted)
        {
            $qb->andWhere('m.persisted = true');
        }
        
        $qb->orderBy('m.position, l.position', 'ASC');
        
        return $qb->getQuery()->getResult();
    }
    
    public function getMenu($id, $user, $site)
    {
        $qb = $this->createQueryBuilder('m')
                ->join('m.site', 's');
                
        $qb->where('m.id = :id')
                ->setParameter('id', $id)
            ->andWhere('s.url = :site')
                ->setParameter('site', $site)
            ->andWhere('s.User = :user')
                ->setParameter('user', $user);
        
        return $qb->getQuery()->getSingleResult();
    }
}