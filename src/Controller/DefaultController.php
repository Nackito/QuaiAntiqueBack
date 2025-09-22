<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
  #[Route('/')]
  public function home(): Response
  {
    // This is the default action for the controller
    return new Response('Welcome to the home page!');
  }
}
