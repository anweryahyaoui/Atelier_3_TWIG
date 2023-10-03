<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        
        return $this->render('home/index.html.twig',
    ['name'=> 'mohamed anwer',
    'lastname'=>'yahyaoui']);
    }

    #[Route('/show', name: 'show')]
    public function show(): Response
    {
        $rand = rand(0,10);
        echo $rand;
        if($rand %2==0){
            return $this->redirectToRoute('home');
        }
        
        return $this->forward('App\Controller\HomeController::index'); 
    
    }




    #[Route('/hi/{nom}/{prenom}', name:'hi')]
    public function sayHello($nom, $prenom):Response
    {
        return $this->render('home/msg.html.twig', ['nom'=>$nom,'prenom'=>$prenom]);
    }















   

    

}
