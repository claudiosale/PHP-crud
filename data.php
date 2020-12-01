<?php

session_start();

require 'todo.php';

$todoList = array();

$todoSer = serialize($todoList);

$_SESSION["todoList"] = $todoSer;

?>