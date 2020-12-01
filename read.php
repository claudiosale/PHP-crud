<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Read</title>
</head>
<body>

    <div class='container-create'>

        <?php

        session_start();

        require_once 'todo.php';

        $todoRead = unserialize($_SESSION["todoList"]);

        $todoId = $_GET['read'];

        $todoDetails = $todoRead[$todoId]; 

        ?>

        <h2> <?php echo $todoDetails->title ?> </h2>

        <p> <?php echo $todoDetails->text ?> </p>

        <button onclick="window.location.href = 'http\://localhost/PHP/'">Torna alla lista</button> 

    </div>
    
</body>
</html>