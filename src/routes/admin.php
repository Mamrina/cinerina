<?php

$admin = '/' . $_ENV['ADMIN_FOLDER'];

$router->addMatchTypes(['uuid' => '[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}']);

// Users
$router->map('GET|POST', $admin . '/connexion', 'users/admin_login', 'login');
$router->map('GET|POST', $admin . '/deconnexion', 'users/admin_logout', 'logout');
$router->map('GET|POST', $admin . '/mot-de-passe-oublie', '', 'lostPassword');
$router->map('GET|POST', $admin . '/utilisateurs/tableau-de-bord', 'users/admin_dashboard', 'dashboard');
$router->map('GET|POST', $admin . '/utilisateurs', 'users/admin_listUsers', 'users');
$router->map('GET|POST', $admin . '/utilisateurs/editer/[uuid:id]', 'users/admin_edit', 'editUser');
$router->map('GET|POST', $admin . '/utilisateurs/editer', 'users/admin_edit', 'addUser');
$router->map('GET|POST', $admin . '/utilisateurs/supprimer/[uuid:id]', 'users/admin_delete', 'deleteUser');

// Movies
$router->map('GET|POST', $admin . '/films', 'movies/admin_listMovies', 'listMovies');
$router->map('GET|POST', $admin . '/films/editer/[i:id]', 'movies/admin_editMovies', 'editMovie');
$router->map('GET|POST', $admin . '/films/editer', 'movies/admin_editMovies', 'addMovie');
$router->map('GET|POST', $admin . '/films/supprimer/[i:id]', 'movies/admin_deleteMovies', 'deleteMovie');

// Categories
$router->map('GET|POST', $admin . '/categories', 'categories/admin_listCategories', 'listCategories');
$router->map('GET|POST', $admin . '/categories/editer/[i:id]', 'categories/admin_editCategories', 'editCategorie');
$router->map('GET|POST', $admin . '/categories/editer', 'categories/admin_editCategories', 'addCategorie');
$router->map('GET|POST', $admin . '/categories/supprimer/[i:id]', 'categories/admin_deleteCategories', 'deleteCategorie');
