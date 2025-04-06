<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/controllers/AlunniController.php';
require __DIR__ . '/controllers/CertificazioniController.php';
require __DIR__ . '/controllers/incldes/Db.php';


$app = AppFactory::create();

//Alunni

//curl http://localhost:8080/alunni
$app->get('/alunni', "AlunniController:index");

//curl http://localhost:8080/alunni/2
$app->get('/alunni/{id}', "AlunniController:show");

//curl -X POST http://localhost:8080/alunni -H "Contenct-Type: application/json" -d '{"nome":"ciccio", "cognome":"pasta"}'
$app->post('/alunni', "AlunniController:create");

//curl -X PUT http://localhost:8080/alunni/2 -H "Contenct-Type: application/json" -d '{"nome":"ciccio", "cognome":"pasta"}'
$app->put('/alunni/{id}', "AlunniController:update");

//curl -X DELETE http://localhost:8080/alunni/2
$app->delete('/alunni/{id}', "AlunniController:destroy");



//Certificazioni

//curl http://localhost:8080/alunni/2/certificazioni
$app->get('/alunni/{id}/certificazioni', "CertificazioniController:index");

//curl http://localhost:8080/certificazioni/2
$app->get('/certificazioni/{id}', "CertificazioniController:show");

//curl -X POST http://localhost:8080/alunni/2/certificazioni -H "Contenct-Type: application/json" -d '{"nome":"ciccio", "ente":"pasta", "data_certificazione":"2023-10-10"}'
$app->post('/alunni/{id}/certificazioni', "CertificazioniController:create");

//curl -X PUT http://localhost:8080/certificazioni/2 -H "Contenct-Type: application/json" -d '{"nome":"ciccio", "ente":"pasta", "data_certificazione":"2023-10-10"}'
$app->put('/certificazioni/{id}', "CertificazioniController:update");

//curl -X DELETE http://localhost:8080/certificazioni/2
$app->delete('/certificazioni/{id}', "CertificazioniController:destroy");


$app->run();
