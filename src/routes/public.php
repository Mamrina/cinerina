<?php

// On peut changer slug pour url
$router->addMatchTypes(['url' => '[a-z0-9]+(?:-[a-z0-9]+)*']);

// Movies
$router->map('GET|POST', '/', 'home', 'home');
$router->map('GET|POST', '/recherche', 'search');
$router->map('GET|POST', '/film/[url:slug]', 'detailsMovie', 'details');

// Pages
$router->map('GET|POST', '/politique-de-confidentialite', 'privacy');
$router->map('GET|POST', '/mentions-legales', 'legalNotice');
