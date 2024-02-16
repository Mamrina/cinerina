<?php

// Déclaration message d'erreur
$errorsMessageCategorie = [
    'genre' => false
];

if (!empty($_POST)) {
    // Rules for categories title field
    if (!empty($_POST['genre'])) {
        if (checkExistCategories($_POST['genre'])) {
            $errorsMessageCategorie['genre'] = 'Cette catégorie existe déjà !';
        }
    } else {
        $errorsMessageCategorie['genre'] = 'Le champ du titre est obligatoire.';
    }

    // Save categories in database
    if (!empty($_POST['genre'])) {
        if (!array_filter($errorsMessageCategorie)) {
            if (!empty($_GET['id'])) {
                updateCategorie('La catégorie à bien été modifiée.');
            } else {
                addCategorie();
            }

            // Redirect to categories list
            alert('La catégorie a bien été ajouté.', 'success');
            header('Location: ' . $router->generate('listCategories'));
        } else {
            alert('Cette catégorie existe déjà. Ajout interrompu.', 'danger');
        }
    } else {
        alert('Merci de remplir tous les champs obligatoires.', 'danger');
    }
} else if (!empty($_GET['id'])) { // La catégorie reste dans le champs
    $_POST = (array) getCategorie();
}
