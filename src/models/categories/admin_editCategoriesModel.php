<?php

/**
 * Check if the mail already exists in the database
 */
function checkExistCategories(): mixed
{
    global $db;
    $data['genre'] = $_POST['genre'];

    try {
        $sql = 'SELECT genre FROM categories WHERE genre = :genre';
        $query = $db->prepare($sql);
        $query->execute($data);
    } catch (PDOException $e) {
        dump($e->getMessage());
        die;
    }

    return $query->fetch();
}

/**
 * Check a movies in the database
 */
function addCategorie(): bool
{
    global $db;
    $data = [
        'genre' => $_POST['genre']
    ];

    try {
        $sql = 'INSERT INTO categories (genre) VALUES (:genre)';
        $query = $db->prepare($sql);
        $query->execute($data);
    } catch (PDOException $e) {
        dump($e->getMessage());
        die;
    }

    return true;
}

function updateCategorie(string $message)
{
    global $db;
    $data = [
        'genre' => $_POST['genre']
    ];

    try {
        $sql = 'UPDATE categories SET genre = :genre WHERE id = :id';
        $query = $db->prepare($sql);
        $query->execute($data);
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

function getCategorie()
{
    global $db;

    try {
        $sql = 'SELECT genre FROM categories WHERE id = :id';
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
