<?php




use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';


$app = AppFactory::create();

//$app->addRoutingMiddleware();
//$errorMidleware = $app->addErrorMiddleware(true, true, true);

require __DIR__ . '/../Routes/mcglibros.php';
require __DIR__ . '/../Routes/mcgCategorias.php';
require __DIR__ . '/../Routes/mcgUsuarios.php';
require __DIR__ . '/../Routes/mcgEditores.php';
require __DIR__ . '/../Routes/mcgdetallepedidos.php';
require __DIR__ . '/../Routes/mcgPerfiles.php';
$app->run();


