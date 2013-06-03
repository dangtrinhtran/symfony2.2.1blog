<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PageController extends Controller {
	
	public function aboutAction() {
		return $this->render('BloggerBlogBundle:Pages:about.html.twig');
	}
	
	public function contactAction() {
		return $this->render('BloggerBlogBundle:Pages:contact.html.twig');
	}
}
