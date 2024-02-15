<?php

/**
 * Get all movies
 */
function getCategories()
{
    global $db;

    $sql = 'SELECT id, genre FROM categories';
    $query = $db->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}
