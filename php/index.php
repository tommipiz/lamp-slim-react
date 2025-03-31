<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/controllers/AlunniController.php';

$app = AppFactory::create();

//curl http://localhost:8080/alunni
$app->get('/alunni', "AlunniController:index");

//curl http://localhost:8080/alunni/2
$app->get('/alunni/{id:\d+}', "AlunniController:show");

//curl http://localhost:8080/alunni -H "Contenct-Type: application/json" -d '{"nome:ciccio}'
$app->post('/alunni', "AlunniController:create");

//curl http://localhost:8080/alunni/2 -H "Contenct-Type: application/json" -d '{"nome:ciccio}'
$app->put('/alunni{id}', "AlunniController:update");

//curl -X PUT http://localhost:8080/alunni/2 -H "Contenct-Type: application/json" -d '{"nome:ciccio}'
$app->delete('/alunni{id}', "AlunniController:destroy");


$app->run();
