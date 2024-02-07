<?php

/**
 * Get all users
 */
function getUsers()
{
    global $db;

    $sql = 'SELECT id, email, pseudo FROM users';
    $query = $db->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}
