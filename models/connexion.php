<?php

function db()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root', '');
    } catch (Exception $e) {
        echo 'Erreur de connexion à la base de données';
    }

    $sql = "SELECT * FROM books";
    $statement = $db->prepare($sql);

    if ($statement->execute()) {
        $books = $statement->fetchAll();
    }
    return $books;
}

function DbConnexion()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root', '');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
