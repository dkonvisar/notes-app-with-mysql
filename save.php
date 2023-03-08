<?php

$connection = require_once './Connection.php';

$id = $_POST['id'] ?? '';
$id ? $connection->updateNote($id, $_POST) : $connection->addNote($_POST);
header('Location: index.php');