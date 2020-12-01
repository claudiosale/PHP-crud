<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ToDo</title>
</head>
<body>

    <div class="container">

        <button onclick="window.location.href = 'http\://localhost/PHP/create.php'">Crea nuovo</button>

    </div>

    <?php

    session_start();

    require_once 'todo.php';

    if (isset($_SESSION["todoList"]) == true) {

        $todo = unserialize($_SESSION["todoList"]);

        for ($i=0; $i < (count($todo)); $i++) { 

            echo
            "<div class='container' style='height: 150px'>
                <h2>" . $todo[$i]->title . "</h2>
                <form action='http://localhost/PHP/read.php'>
                    <button name='read' value='" . $i . "'>Dettagli</button>
                </form>
                <form action='http://localhost/PHP/update.php'>
                    <button name='edit' value='" . $i . "'>Modifica</button>
                </form>
                <form action='http://localhost/PHP/delete.php'>
                    <button name='del' value='" . $i . "'>Elimina</button>
                </form>
            </div>
            <br>";
            
        };
    };

    ?>

</body>
</html>