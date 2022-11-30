<?php

function connectToDb () {

    $host = '';
    $db = '';
    $user = '';
    $passwd = '';
    $charset = 'utf8mb4';
    
    try {
         return new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $passwd);
    } catch (\PDOException $e) {
         throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

}

function fetchAllTasks ( $pdo ) {

    $stmt = $pdo->prepare('SELECT * FROM tasks;');
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_CLASS, 'Task');

}
