<?php

if (!empty($_GET['id']) && !empty(checkExistCategories()->id)) {
    deleteCategorie();
} else {
    alert('Impossible de supprimer cet film.', 'danger');
}
header('Location: ' . $router->generate('listCategories'));
die;
