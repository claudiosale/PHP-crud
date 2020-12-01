<?php

session_start();

include 'todo.php';

$todo = unserialize($_SESSION["todoList"]);

$todo[] = new Todo($_GET['title'], $_GET['text']);

$todoSer = serialize($todo);

$_SESSION["todoList"] = $todoSer;

header('Location: http://localhost/PHP/');

?>