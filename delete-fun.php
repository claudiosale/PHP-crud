<?php

session_start();

$id = $_SESSION["del"];

$todo = unserialize($_SESSION["todoList"]);

unset($todo[$id]);

$todoFiltered = array_filter($todo);

$reindexed_todoFiltered = array_values($todoFiltered);

$todoSer = serialize($reindexed_todoFiltered);

$_SESSION["todoList"] = $todoSer;

header('Location: http://localhost/PHP/');

?>