<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class HomeController extends AbstractController
{

	public function index()
	{

          //return new Response('<h1>Hello world</h1>');
		return $this->render('home.html.twig');
	}
}