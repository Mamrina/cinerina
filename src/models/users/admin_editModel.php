<?php

/**
 * Check if the mail already exists in the database
 */
function checkAlreadyExistEmail(): mixed
{
    global $db;
    // modif avant de soummettre le formulaire
    if (!empty($_GET['id'])) {
        $email = getUser()->email;
        // si ça j'annule la règle
        if ($email === $_POST['email']) {
            return false;
        }
    }

    $data['email'] = $_POST['email'];
    $sql = 'SELECT email FROM users WHERE email = :email';
    $query = $db->prepare($sql);
    //$query->bindParam(':mail', $data['email'], PDO::PARAM_STR);
    //$query->execute();
    $query->execute($data);

    return $query->fetch();
}

/**
 * Check a user in the database
 */
function addUser(string $message)
{
    global $db;
    $data = [
        'email' => $_POST['email'],
        'pseudo' => $_POST['pseudo'],
        'pwd' => password_hash($_POST['pwd'], PASSWORD_DEFAULT),
        'role_id' => 1
    ];

    try {
        // Si tout se passe bien
        $sql = 'INSERT INTO users (id, email, pseudo, pwd, role_id) VALUES (UUID(), :email, :pseudo, :pwd, :role_id)';
        $query = $db->prepare($sql);
        $query->execute($data);
        alert($message, 'success');
        //****************************** */
        // Si ça ne va pas 
    } catch (PDOException $e) {
        if ($_ENV['DEBUG'] == 'true') {
            // Si je suis en mode débug dump() -> (voir config -> database.php)
            dump($e->getMessage());
            die;
        } else {
            alert('Une erreur est survenue. Merci de réessayer plus tard.');
        }
    }
}

function updateUser(string $message) // $message = à 'Un utilisateur a bien été modifié ... dans editController
{
    global $db;
    $data = [
        'email' => $_POST['email'],
        'pseudo' => $_POST['pseudo'],
        'pwd' => password_hash($_POST['pwd'], PASSWORD_DEFAULT),
        'id' => $_GET['id']
    ];

    try {
        $sql = 'UPDATE users SET email = :email, pseudo = :pseudo, pwd = :pwd, modified = NOW() WHERE id = :id';
        $query = $db->prepare($sql);
        $query->execute($data);
        alert($message, 'success');
        //****************************** */
        // Si ça ne va pas j'exécute ça
    } catch (PDOException $e) {
        if ($_ENV['DEBUG'] == 'true') {
            // Si je suis en mode débug dump() -> (voir config -> database.php)
            dump($e->getMessage());
            die;
        } else {
            alert('Une erreur est survenue. Merci de réessayer plus tard.');
        }
    }
}

function getUser()
{
    global $db;

    try {
        $sql = 'SELECT email FROM users WHERE id = :id';
        $query = $db->prepare($sql);
        $query->execute(['id' => $_GET['id']]);

        return $query->fetch();
    } catch (PDOException $e) {
        if ($_ENV['DEBUG'] == 'true') {
            // Si je suis en mode débug dump() -> (voir config -> database.php)
            dump($e->getMessage());
            die;
        } else {
            alert('Une erreur est survenue. Merci de réessayer plus tard.' . 'danger');
        }
    }
}
