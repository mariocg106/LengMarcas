<?php




use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';


$app = AppFactory::create();

$app->addRoutingMiddleware();
$errorMidleware = $app->addErrorMiddleware(true, true, true);

require __DIR__ . '/../Routes/libros.php';


$app->run();


