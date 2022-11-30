<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class Client {

        #[Route("/client", name: "index")]

        public function index() {
            return new Response( "Bonjour");
        }

        #[Route("/client/prenom/{name}", name: "client_prenom", requirements: ['name' => '^[a-z]+(?:-?[a-z]+)+$'])]
        public function info( string $name) {
            return new Response('Salut ' . $name);
        }

    }

?>