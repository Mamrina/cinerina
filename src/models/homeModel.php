<?php

/**
 * Get all movies order by added date
 */
/*************** FAIRE TRY CATCH *************** */
function getMovies()
{
    global $db;
    $sql = 'SELECT * FROM movies ORDER BY created_at DESC';
    $query = $db->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}
