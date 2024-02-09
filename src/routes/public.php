<?php

// On peut changer slug pour url
$router->addMatchTypes(['url' => '[a-z0-9]+(?:-[a-z0-9]+)*']);

// Movies
$router->map('GET', '/', 'home', 'home');
$router->map('GET', '/recherche', 'search');
$router->map('GET', '/film/[url:slug]', 'detailsMovie', 'details');

// Pages
$router->map('GET', '/politique-de-confidentialite', 'privacy');
$router->map('GET', '/mentions-legales', 'legalNotice');
