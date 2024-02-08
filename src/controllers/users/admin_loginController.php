<?php

if (!empty($_POST['email']) && !empty($_POST['pseudo']) && !empty($_POST['pwd'])) {
    $accessUser = checkUserAccess();
    if (!empty($accessUser)) {
        $_SESSION['user'] = [
            'id' => $accessUser->id,
            'pseudo' => $accessUser->pseudo,
            'last_login' => date('Y-m-d H:i:s')
        ];

        saveLastLogin($accessUser->id);

        // Création d'une session, utilisation de l'uuid
        alert('Vous êtes connecté.', 'success');
        header('Location: ' . $router->generate('dashboard'));
        die;
    } else {
        alert('Identifiants incorrects.', 'danger'); // Identifiants incorrects
    }
}
