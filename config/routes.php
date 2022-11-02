<?php

    use App\Controller\Client;
    use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

    return function (RoutingConfigurator $routes) {
        $routes->add( "client_prenom", "/test/prenom/{name}")
            ->controller([client::class, "info"])
            ->requirements([ "name" => "^[A-Za-z]+(?:-?[A-Za-z]+)+$" ]);
    };

?>