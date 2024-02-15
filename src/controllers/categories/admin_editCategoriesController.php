<?php

//declaration message d'erreur
$errorsMessageCategorie = [
    'genre' => false
];

if (!empty($_POST)) {
    // Rules for movie title field
    if (!empty($_POST['genre'])) {
        if (checkExistCategories($_POST['genre'])) {
            $errorsMessageCategorie['genre'] = 'Cette catégorie existe déjà !';
        }
    } else {
        $errorsMessageCategorie['genre'] = 'Le champ du titre est obligatoire.';
    }

    // Save movies in database
    if (!empty($_POST['genre'])) {
        if (!array_filter($errorsMessageCategorie)) {
            if (!empty($_GET['id'])) {
                updateCategorie('La catégorie à bien été modifiée.');
            } else {
                addCategorie();
            }

            // Redirect to movies list
            header('Location: ' . $router->generate('listCategories'));
            alert('La catégorie a bien été ajouté.', 'success');
        } else {
            alert('Cette catégorie existe déjà. Ajout interrompu.');
        }
    } else {
        alert('Merci de remplir tous les champs obligatoires.');
    }
} else if (!empty($_GET['id'])) { // Le film reste dans le champs
    $_POST = (array) getCategorie();
}
