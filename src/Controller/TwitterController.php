<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class TwitterController extends AbstractController
{
    #[Route('/twitter/twitter')]
    public function index(): Response
    {
        return $this->render('twitter/twitter.html.twig');
    }
}
