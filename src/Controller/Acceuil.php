<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Acceuil extends AbstractController{

    #[Route('/test', name: 'kernel_controller', defaults: ['ouverture' => "10/18"])]
    public function home(){
        return $this->render('ouverture.html.twig');
    }
}

?>