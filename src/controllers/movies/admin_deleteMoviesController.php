<?php

if (!empty($_GET['id']) && !empty(checkExistMovies()->id)) {
    deleteMovie();
} else {
    alert('Impossible de supprimer cet film.', 'danger');
}
header('Location: ' . $router->generate('listMovies'));
die;
