<?php

function connectToDb () {

    $host = 'd107230.mysql.zonevs.eu';
    $db = 'd107230_todo';
    $user = 'd107230sa421002';
    $passwd = 'Tak21Salas6na';
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
