<?php

session_start();

require 'todo.php';

$todoId = $_GET['id'];
$todoTitle = $_GET['title'];
$todoText = $_GET['text'];

$todoUpdate = unserialize($_SESSION["todoList"]);

$todoUpdate[$todoId]->title = $todoTitle;
$todoUpdate[$todoId]->text = $todoText;

$todoUpdateSer = serialize($todoUpdate);

$_SESSION["todoList"] = $todoUpdateSer;

header('Location: http://localhost/PHP/');

?>