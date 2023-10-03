<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/author/{name}', name: 'app_author')]
    public function showAuthor($name): Response
    {
        return $this->render('author/show.html.twig', [
            'name' => $name,
        ]);
    }


    #[Route('/list', name: 'app_list')]
    public function list():Response {
        $authors=array(
            array('id' => 1, 'picture' => '/images/victor-hugo.jpg', 'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg', 'username' => 'William Shakspeare', 'email' => 'William.Shakspeare@gmail.com', 'nb_books' => 200),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg', 'username' => 'Taha Hussein', 'email' => 'Taha.Hussein@gmail.com', 'nb_books' => 300)
        );

        return $this->render('author/list.html.twig', [
            'authors' => $authors
        ]); 
       
    }

    #[Route('/details/{id}', name : 'details')]
    public function authorDetails($id) : Response {
        return $this -> render('author/showAuthor.html.twig', [
            'id' => $id,
        ]);
    } 

}
