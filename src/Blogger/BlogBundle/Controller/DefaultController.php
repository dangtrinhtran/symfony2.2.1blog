<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

	public function indexAction() {
		#return $this->render('BloggerBlogBundle:Default:index.html.twig', array('name' => $name));
		return $this->render('BloggerBlogBundle:Default:index.html.twig');
	}
	
	public function aboutAction() {
		return $this->render('BloggerBlogBundle:Pages:about.html.twig');
	}

}
