<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    /**
     * @Route("/author", name="author")
     */
    public function index()
    {
        return $this->render("author/author.html.twig",["name"=>"Tom Halland"]);
    }
}
