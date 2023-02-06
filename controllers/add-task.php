<?php

$app['database']->insert('tasks', [
    'description' => $_POST['description'],
    'name' => $_POST['task'],


]);

