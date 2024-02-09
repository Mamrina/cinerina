<?php

//declaration message d'erreur
$errorsMessageMovie = [
    'title' => false,
    'release_date' => false,
    'duration' => false,
    'synopsis' => false,
    'casting' => false,
    'director' => false,
    'note_press' => false
];

if (!empty($_POST)) {
    // Rules for movie title field
    if (!empty($_POST['title'])) {
        if (checkExistMovies($_POST['title'])) {
            $errorsMessageMovie['title'] = 'Ce film de film existe déjà !';
        }
    } else {
        $errorsMessageMovie['title'] = 'Le champ du titre est obligatoire.';
    }

    // Save movies in database
    if (!empty($_POST['title']) && !empty($_POST['release_date']) && !empty($_POST['duration']) && !empty($_POST['synopsis']) && !empty($_POST['casting']) && !empty($_POST['director']) && !empty($_POST['note_press'])) {
        if (!array_filter($errorsMessageMovie)) {
            if (!empty($_GET['id'])) {
                updateMovie('Le film à bien été modifié.');
            } else {
                addMovie();
            }

            // Redirect to movies list
            header('Location: ' . $router->generate('listMovies'));
            alert('Le film a bien été ajouté.', 'success');
        } else {
            alert('Ce film existe déjà. Ajout interrompu.');
        }
    } else {
        alert('Merci de remplir tous les champs obligatoires.');
    }
} else if (!empty($_GET['id'])) { // Le film reste dans le champs
    $_POST = (array) getMovie();
}
