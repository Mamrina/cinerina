<?php

/**
 * Get all movies
 */
function getMovies()
{
    global $db;

    $sql = 'SELECT id, title, release_date, synopsis, casting, duration, director, note_press FROM movies';
    $query = $db->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}
