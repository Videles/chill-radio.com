<?php 

$router = new Phalcon\Mvc\Router();

$router->add(
  '/api/currentSong',
  [
    'controller' => 'radio',
    'action'     => 'currentSong',
  ]
);

return $router;