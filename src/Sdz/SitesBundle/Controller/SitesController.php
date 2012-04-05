<?php

namespace Sdz\SitesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Sdz\SitesBundle\Entity\Site;
use Sdz\SitesBundle\Entity\Menu;
use Sdz\SitesBundle\Entity\Lien;
use Sdz\SitesBundle\Entity\Page;
use Sdz\SitesBundle\Entity\Section;

use Sdz\SitesBundle\Form\SiteType;
use Sdz\SitesBundle\Form\PageType;
use Sdz\SitesBundle\Form\MenuType;
use Sdz\SitesBundle\Form\SectionType;

class SitesController extends Controller
{           
    public function indexAction($deleted = false)
    {
        if ($deleted != false)
        {
            $deleted = true;
        }
    	$em = $this->getDoctrine()->getEntityManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $entities = $em->getRepository('SdzSitesBundle:Site')->getByUser($user, $deleted);
        
        return $this->render('SdzSitesBundle:Sites:index.html.twig', array(
            'entities' => $entities,
            'deleted'  => $deleted,
            ));
    }

    
    public function newAction()
    {
    	$entity = new Site();
    	$form = $this->createForm(new SiteType(), $entity);
    	
    	return $this->render('SdzSitesBundle:Sites:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
    
    public function deleteSiteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $site = $em->getRepository('SdzSitesBundle:Site')->find($id);
        $site->setDeleted(true);
        $em->persist($site);
        $em->flush();
        
        $url = $this->container->get('request')->headers->get('referer');
        return $this->redirect($url);
    }
    
    public function restoreSiteAction($id)
    {
        $em= $this->getDoctrine()->getEntityManager();
        
        $site = $em->getRepository('SdzSitesBundle:Site')->find($id);
        $site->setDeleted(false);
        $em->persist($site);
        $em->flush();
        
        $url = $this->container->get('request')->headers->get('referer');
        return $this->redirect($url);
    }
    
    public function createAction()
    {
    	$entity = new Site();
    	
    	$user = $this->container->get('security.context')->getToken()->getUser();
    	$entity->setUser($user);
    	
    	$request = $this->getRequest();
        $form = $this->createForm(new SiteType(), $entity);
        
        if ($request->getMethod() == "POST")
        {
            $form->bindRequest($request);

            if ($form->isValid()) 
            {
                $em = $this->getDoctrine()->getEntityManager();
                $site = $em->getRepository('SdzSitesBundle:Site')->findOneBy(array('name' => $entity->getName()));
                if(!$site)
                {
                    $em->persist($entity);

                    $page_accueil = new Page('accueil');
                    $page_accueil->setSite($entity);
                    $page_accueil->setName('accueil');
                    $page_accueil->setTitle($entity->getName() . ' - Accueil');
                    $page_accueil->setHome(true);
                    $em->persist($page_accueil);
                    
                    $hero_unit = new Section("hero-unit");
                    $hero_unit->setPage($page_accueil);
                    $hero_unit->defaultContenu("hero-unit");
                    $em->persist($hero_unit);
                    
                    for ($i = 1; $i < 7; $i++)
                    {
                        $span4 = new Section("span4");
                        $span4->setPage($page_accueil);
                        $span4->defaultContenu("span4");
                        $em->persist($span4);
                    }
                   
                    $header = new Menu($entity->getName(), 'header');
                    $header->setSite($entity);
                    $link_home = new Lien('Home');
                    $link_home->setPage($page_accueil);
                    $header->addLink($link_home);
                    $header->addLink(new Lien('Contact'));
                    $header->setPersisted(true);
                    $em->persist($header);

                    $em->flush();
                }
                return $this->redirect($this->generateUrl('SdzSitesBundle_homepage'));
            }
        }
        return $this->render('SdzSitesBundle:Sites:new.html.twig', array(
                'entity' => $entity,
                'form'   => $form->createView()
                ));
    }
    
    public function viewAction($user, $site, $name, $visitor = false)
    {
        //$this->container->get('knp_snappy.pdf')->generate('http://www.google.fr', '/Users/Balthazar/Desktop/googl.pdf');

        if ($visitor != false) $visitor = true;
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em   = $this->getDoctrine()->getEntityManager();
                
        $page     = $em->getRepository('SdzSitesBundle:Page')->getPage($user, $site, $name);
        $sections = $em->getRepository('SdzSitesBundle:Section')->getSections($user, $site, $name);
        $header   = $em->getRepository('SdzSitesBundle:Menu')->getHeader($user, $site);
        $sidebar  = $em->getRepository('SdzSitesBundle:Menu')->getSidebar($user, $site);
        
        if ($page->getType() == 'accueil')
            return $this->render('SdzSitesBundle:Model:accueil.html.twig', array(
                'header'   => $header,
                'sidebar'  => $sidebar,
                'sections' => $sections,
                'page'     => $page,
                'visitor'  => $visitor,
            ));
        
        else
            return $this->render('SdzSitesBundle:Model:cours.html.twig', array(
                'header'   => $header,
                'sidebar'  => $sidebar,
                'sections' => $sections,
                'page'     => $page,
                'visitor'  => $visitor,
        ));
    }
    
    public function newPageAction($user, $site)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em   = $this->getDoctrine()->getEntityManager();
        
        $site = $em->getRepository('SdzSitesBundle:Site')->getSite($user, $site);
        
        $page = new Page();
    	$form = $this->createForm(new PageType(), $page);
    	
    	return $this->render('SdzSitesBundle:Sites:new_page.html.twig', array(
            'form' => $form->createView(),
            'site' => $site,
        ));
        
    }
    
    public function deletePageAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $page = $em->getRepository('SdzSitesBundle:Page')->find($id);
        $page->setDeleted(true);
        $em->persist($page);
        $em->flush();
        
        return $this->redirect($this->generateUrl('view_page', array('user' => $user, 'site' => $page->getSite()->getUrl(), 'name' => 'accueil')));
    }
    
    public function createPageAction()
    {
        $user    = $this->container->get('security.context')->getToken()->getUser();
        $em      = $this->getDoctrine()->getEntityManager();
        $request = $this->getRequest();
        
        $page = new Page();
        $form = $this->createForm(new PageType(), $page);
        
        if ($request->getMethod() == "POST")
        {
            $form->bindRequest($request);
            
            if($form->isValid())
            {                
                $array =  $request->get('page_type_form');
                if ($page->getType() == 'accueil')
                {
                    $hero_unit = new Section("hero-unit");
                    $hero_unit->setPage($page);
                    $hero_unit->defaultContenu("hero-unit");
                    $em->persist($hero_unit);
                    
                    for ($i = 1; $i < 7; $i++)
                    {
                        $span4 = new Section("span4");
                        $span4->setPage($page);
                        $span4->defaultContenu("span4");
                        $em->persist($span4);
                    }
                }
                else
                {
                    $span = new Section("span12");
                    $span->setPage($page);
                    $span->defaultContenu("span12");
                    $em->persist($span);
                }
                $site_url   = $request->get('site');
                $site       = $em->getRepository('SdzSitesBundle:Site')->getSite($user, $site_url);
                $under_home = $request->get('pageLoc');
                $home       = $em->getRepository('SdzSitesBundle:Page')->getHomePage($user, $site_url);
                
                if ($under_home == "home")
                {
                    $page->setName($home->getName() .'.'. $page->getName());
                }
                
                $page->setSite($site);
                $em->persist($page);
                $em->flush();
                
                return $this->redirect($this->generateUrl('view_page', array('user'=>$user->getUsername(), 'site' => $site->getUrl(), 'name' => $home->getName())));
            }
        }
        
        $url = $this->container->get('request')->headers->get('referer');
        return $this->redirect($url);
    }
    
    public function editMenuAction($user, $site)
    {
        $site_url = $site;
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em   = $this->getDoctrine()->getEntityManager();
        
        $site    = $em->getRepository('SdzSitesBundle:Site')->getSite($user, $site_url);
        $header  = $em->getRepository('SdzSitesBundle:Menu')->getHeader($user, $site_url);
        $sidebar = $em->getRepository('SdzSitesBundle:Menu')->getSidebar($user, $site_url);
        $pages   = $em->getRepository('SdzSitesBundle:Page')->getAllPages($user, $site_url);
        
        $menu = new Menu();
        //$form = $this->createForm(new MenuType(), $menu);
        
        return $this->render('SdzSitesBundle:Sites:edit_menu.html.twig', array(
            'site'    => $site,
            'header'  => $header,
            'sidebar' => $sidebar,
            'pages'   => $pages,
            //'form'    => $form->createView(),
        ));
    }
    
    public function sortableMenuAction()
    {
        $user    = $this->container->get('security.context')->getToken()->getUser();
        $request = $this->getRequest();
        $em      = $this->getDoctrine()->getEntityManager();
        
        if($request->isXmlHttpRequest())
        {
            $string_header  = $request->get('result_header');
            $string_sidebar = $request->get('result_sidebar');
            $site_url       = $request->get('site');

            $array_header   = explode(',', $string_header);
            $array_sidebar  = explode(',', $string_sidebar);
            $header         = $em->getRepository('SdzSitesBundle:Menu')->getHeader($user, $site_url, true, false);
            $links_header   = $header->getLinks();
            $sidebar        = $em->getRepository('SdzSitesBundle:Menu')->getSidebar($user, $site_url, true, false);
            
            foreach($array_header as $k => $hh)
            {
                $ar = explode('-', $hh);
                $h = $ar[1];
                $links_header[$h]->setPosition($k);
                $em->persist($links_header[$h]);
            }
            
            foreach($array_sidebar as $k => $ss)
            {
                $ar = explode('-', $ss);
                $s = $ar[1];
                $sidebar[$s]->setPosition($k);
                $sidebar[$s]->setPersisted(true);
                if ($sidebar[$s]->isDeleted())
                {
                    $em->remove($sidebar[$s]);
                    $em->flush();
                }
                else
                {
                    $em->persist($sidebar[$s]);
                }
            }
            
            $em->flush();
            
            $response = new Response();
            $response->setContent(json_encode(array('status' => 'ok')));
            $response->headers->set('Content-Type', 'application/json');
        
            return $response;
        }
    }
    
    public function createMenuAction()
    {
        $user    = $this->container->get('security.context')->getToken()->getUser();
        $request = $this->getRequest();
        $em      = $this->getDoctrine()->getEntityManager();
        
        if($request->isXmlHttpRequest())
        {
            $position = $request->get('position');
            $name     = $request->get('name');
            $pages_r  = $request->get('pages');
            if ($pages_r == '') $pages = null;
            else $pages = explode(',', $pages_r);
            $site_url = $request->get('site');
            $site     = $em->getRepository('SdzSitesBundle:Site')->getSite($user, $site_url);
            
            $menu     = new Menu($name, "sidebar");
            if ($pages != null)
            {
                foreach ($pages as $p)
                {
                    $page = $em->getRepository('SdzSitesBundle:Page')->getPage($user, $site_url, $p);
                    $link = new Lien($page->getTitle());
                    $link->setPage($page);
                    $menu->addLink($link);
                }
            }
            $menu->setSite($site);
            $menu->setPosition($position);
            
            $em->persist($menu);
            $em->flush();
            
            $response = new Response();
            $response->setContent(json_encode($pages));
            $response->headers->set('Content-Type', 'application/json');
        
            return $response;
        }
    }
    
    public function cancelMenuAction()
    {
        $user    = $this->container->get('security.context')->getToken()->getUser();
        $request = $this->getRequest();
        $em      = $this->getDoctrine()->getEntityManager();
        
        if($request->isXmlHttpRequest())
        {
            $site_url       = $request->get('site');
            $header         = $em->getRepository('SdzSitesBundle:Menu')->getHeader($user, $site_url, true, false);
            $links_header   = $header->getLinks();
            $sidebar        = $em->getRepository('SdzSitesBundle:Menu')->getSidebar($user, $site_url, true, false);
            
            foreach ($links_header as $element)
            {
                if ($element->isDeleted())
                {
                    $element->setDeleted(false);
                    $em->persist($element);
                }
                if (!$element->isPersisted())
                {
                    $em->remove($element);
                    $em->flush();
                }
            }
            $em->flush();
            
            foreach ($sidebar as $element)
            {
                if ($element->isDeleted())
                {
                    $element->setDeleted(false);
                    $em->persist($element);
                }
                if (!$element->isPersisted())
                {
                    $em->remove($element);
                    $em->flush();
                }
            }
            $em->flush();
        }
        
        $response = new Response();
        $response->setContent(json_encode(array('status' => 'ok')));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    public function deleteMenuAction()
    {
        $user    = $this->container->get('security.context')->getToken()->getUser();
        $request = $this->getRequest();
        $em      = $this->getDoctrine()->getEntityManager();
        
        if($request->isXmlHttpRequest())
        {
            $id   = $request->get('id');
            $site = $request->get('site');
            $menu = $em->getRepository('SdzSitesBundle:Menu')->getMenu($id, $user, $site);
            $menu->setDeleted(true);
            
            $em->persist($menu);
            $em->flush();
        }
        
        $response = new Response();
        $response->setContent(json_encode(array('status' => 'ok')));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
    
    public function editSectionAction($id)
    {
        $user    = $this->container->get('security.context')->getToken()->getUser();
        $request = $this->getRequest();
        $em      = $this->getDoctrine()->getEntityManager();
        
        $section = $em->getRepository('SdzSitesBundle:Section')->find($id);
        $form = $this->createForm(new SectionType(), $section);
        
        if ($request->getMethod() == "POST")
        {
            $form->bindRequest($request);

            if ($form->isValid()) 
            {
                $em->persist($section);
                $em->flush();
            }
            
            return $this->redirect($this->generateUrl('view_page', array('user'=>$user->getUsername(), 'site' => $section->getPage()->getSite()->getUrl(), 'name' => $section->getPage()->getName())));
        }
        
        return $this->render('SdzSitesBundle:Sites:edit_section.html.twig', array(
            'form'    => $form->createView(),
            'section' => $section,
        ));
    }
}
