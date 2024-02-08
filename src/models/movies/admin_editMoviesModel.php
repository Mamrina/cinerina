<?php

/**
 * Check if the mail already exists in the database
 */
function checkExistMovies(): mixed
{
    global $db;
    $data['title'] = $_POST['title'];
    $sql = 'SELECT title FROM movies WHERE title = :title';
    $query = $db->prepare($sql);
    $query->execute($data);

    return $query->fetch();
}

/**
 * Check a movies in the database
 */
function addMovie(): bool
{
    global $db;
    $data = [
        'title' => $_POST['title'],
        'release_date' => $_POST['release_date'],
        'synopsis' => $_POST['synopsis'],
        'casting' => $_POST['casting'],
        'duration' => $_POST['duration'],
        'director' => $_POST['director'],
        'note_press' => $_POST['note_press']
    ];

    try {
        $sql = 'INSERT INTO movies (title, release_date, synopsis, casting, duration, director, note_press) VALUES (:title, :release_date, :synopsis, :casting, :duration, :director, :note_press)';
        $query = $db->prepare($sql);
        $query->execute($data);
    } catch (PDOException $e) {
        dump($e->getMessage());
        die;
    }

    return true;
}

function updateMovie(string $message)
{
    global $db;
    $data = [
        'title' => $_POST['title'],
        'release_date' => $_POST['release_date'],
        'synopsis' => $_POST['synopsis'],
        'casting' => $_POST['casting'],
        'duration' => $_POST['duration'],
        'director' => $_POST['director'],
        'note_press' => $_POST['note_press'],
        'id' => $_GET['id']
    ];

    try {
        $sql = 'UPDATE movies SET title = :title, release_date = :release_date, synopsis = :synopsis, casting = :casting, duration = :duration, director = :director, note_press = :note_press WHERE id = :id';
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

function getMovie()
{
    global $db;

    try {
        $sql = 'SELECT title, release_date, synopsis, casting, duration, director, note_press FROM movies WHERE id = :id';
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
