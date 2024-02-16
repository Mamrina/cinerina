<?php

if (!empty($_GET['id']) && !empty(checkExistMovies()->id)) {
    deleteMovie();
}
header('Location: ' . $router->generate('listMovies'));
die;
