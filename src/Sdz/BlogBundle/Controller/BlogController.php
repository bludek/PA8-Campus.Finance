<?php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BlogController extends Controller
{
	public function indexAction()
	{
		return $this->render('SdzBlogBundle:Blog:index.html.twig');
	}
	
	public function byeAction()
	{
		return $this->render('SdzBlogBundle:Blog:bye.html.twig');
	}
	
    public function listeAction($page)
    {
        if( $page < 1 )
        {
            throw new NotFoundHttpException('Page inexistante (page = '.$page.')');
        }
        $articles = array(
        array('titre' => 'Mon weekend a Phi Phi Island !', 'slug' => 'mon-weekend-a-phi-phi-island', 'auteur' => 'winzou', 'date' => new \Datetime()),
        array('titre' => 'Repetition du National Day de Singapour', 'slug' => 'repetition-du-national-day-de-singapour', 'auteur' => 'winzou', 'date' => new \Datetime()),
        array('titre' => 'Chiffre d\'affaire en hausse', 'slug' => 'chiffre-d-affaire-en-hausse', 'auteur' => 'M@teo21', 'date' => new \Datetime())
    	);

    	return $this->render('SdzBlogBundle:Blog:liste.html.twig', array(
        'articles' => $articles));
    }
    
    public function voirAction($slug)
    {
        return $this->render('SdzBlogBundle:Blog:voir.html.twig', array('slug' => $slug));
    }
    
    public function ajouterAction()
    {
        return $this->render('SdzBlogBundle:Blog:ajouter.html.twig');
    }

    public function modifierAction($id)
    {
        return $this->render('SdzBlogBundle:Blog:modifier.html.twig', array('id'=> $id));
    }

    public function supprimerAction($id)
    {
        return $this->render('SdzBlogBundle:Blog:supprimer.html.twig', array('id'=> $id));
    }
}
