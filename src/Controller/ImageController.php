<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\BinaryFileResponse;


    class ImageController extends AbstractController {


        #[Route("/", name: "image")]
        public function index(): Response {
            return $this->render( "img/base.html.twig" );
        }

        #[Route("/images/{img}", name: "image_show")]
        public function image( $img ) {
            return $this->render( "img/img.html.twig", [ "img" => $img ] );
        }

        #[Route("/photo/{img}", name: "client_photo")]
        public function imageShow( $img ) {
            return new BinaryFileResponse( __DIR__ . "/../../public/img/" . $img );
        }

        public function menu( ) {

            $files = scandir( __DIR__ . "/../../public/img" );

            $files = array_filter( $files, function( $file ) {
                if ( !is_dir( $file ) && $file != ".DS_Store" )
                    return $file;
            } );

            return $this->render( "img/nav.html.twig", [
                "images" => $files
            ] );

        }

    }

?>