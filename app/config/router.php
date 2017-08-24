<?php

$router = $di->getRouter();

$router->add(
  '/api',
  [
    'controller' => 'radio',
    'action'     => 'index',
  ]
);

$router->add(
  '/api/currentSong',
  [
    'controller' => 'radio',
    'action'     => 'currentSong',
  ]
);

$router->add(
  '/api/currentViewers',
  [
    'controller' => 'radio',
    'action'     => 'currentViewers',
  ]
);

$router->add(
  '/api/recentSongs',
  [
    'controller' => 'radio',
    'action'     => 'recentSongs',
  ]
);

$router->handle();

