<?php

require 'router.php';

$router = new Router();


$router->get('/','view');

$router->post('/login','login');

$router->post('/addSongs','addSongs');

$router->post('/addArtist','addArtist');


$router->routes($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);





