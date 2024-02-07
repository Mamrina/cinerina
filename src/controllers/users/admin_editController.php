<?php

$errorsMessage = [
    'email' => false,
    'pseudo' => false,
    'pwd' => false,
    'pwdConfirm' => false
];

if (!empty($_POST)) {
    // Rules for email field
    if (!empty($_POST['email'])) {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errorsMessage['email'] = 'L\'adresse email n\'est pas valide !';
        } else if (checkAlreadyExistEmail()) {
            $errorsMessage['email'] = 'L\'adresse email existe déjà !';
        }
    }

    if (!empty($_POST['pwd'])) {
        $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{12,}$/';
        if (!preg_match($regex, $_POST['pwd'])) {
            $errorsMessage['pwd'] = 'Merci de respecter le format indiqué.';
        } else if ($_POST['pwd'] !== $_POST['pwdConfirm']) {
            $errorsMessage['pwdConfirm'] = 'Les mots de passe ne sont pas indentiques.';
        }
    }

    // Save user in database
    if (!empty($_POST['email']) && !empty($_POST['pseudo']) && !empty($_POST['pwd']) && !empty($_POST['pwdConfirm'])) {
        if (!$errorsMessage['email'] && !$errorMessage['pseudo'] && !$errorsMessage['pwd'] && !$errorsMessage['pwdConfirm']) {
            // Alert success

            if (!empty($_GET['id'])) {
                updateUser('Un utilisateur a bien été modifié.', 'success');
            } else {
                addUser('Un utilisateur a bien été ajouté.');
            }

            // Redirect to users list
            header('Location: ' . $router->generate('users'));
            die;
        } else {
            alert('Erreur lors de l\'ajout de l\'utilisateur.');
        }
    } else {
        alert('Merci de remplir tous les champs obligatoires.');
    }
} else if (!empty($_GET['id'])) { // L'adresse email reste dans le champs
    $_POST = (array) getUser();
}
