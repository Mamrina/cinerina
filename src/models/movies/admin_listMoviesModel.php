<?php

/**
 * Get all movies
 */
function getMovies()
{
    global $db;

    $sql = 'SELECT id, title, release_date, duration, synopsis, casting, director, note_press FROM movies';
    $query = $db->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}
