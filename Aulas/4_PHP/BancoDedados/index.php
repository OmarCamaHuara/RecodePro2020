<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_log(E_ALL);

    require_once 'vendor/autoload.php';

    use Relay\Relay;

    $request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
        $_SERVER,
        $_GET,
        $_POST,
        $_COOKIE,
        $_FILES
    );

    $loader = new Twig_Loader_Filesystem('.');
    $twig = new \Twig_Environment($loader, array(
        'debug' => true,
        'cache' => false,
    ));

    $router = new Aura\Router\RouterContainer();
    
    $map = $router->getMap();
    $map->get('todo.list', '/', function ($request) use ($twig){
        $task = [
            [
                'id' => 1,
                'description' => 'Aprende ingles',
                'done' => false
            ],
            [
                'id' => 1,
                'description' => 'Hacer tareas',
                'done' =>true
            ],
            [
                'id' => 1,
                'description' => 'Pasear al perro',
                'done' => false
            ],
            [
                'id' => 1,
                'description' => 'Ver el curso intro a php',
                'done' => false
            ]
        ];
        $response = new Zend\Diactoros\Response\HtmlResponse( $twig -> render('
            'task' => $task;
        '));
        return $response;
    });

    $relay = new Relay([
        new Middlewares\AuraRouter($router),
        new Middlewares\RequestHandler()
    ]);

    $response = $relay->handle($request);

    foreach($response->getHeaders() as $name => $values){
        foreach($values as $value){
            header(sprintf('%s: %s', $name, $value), false);
        }
    }
    echo $response-getBody();

?>