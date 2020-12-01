<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>
<body>

    <?php

    $todoId = $_GET['edit']; 

    ?>

    <div class="container-create">

        <form action='http://localhost/PHP/update-fun.php'>

            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title"><br><br>
            <label for="text">Descrizione:</label><br>
            <input type="text" id="text" size="25" name="text"><br><br>
            <input type="hidden" name="id" value='<?php echo $todoId ?>'>
            <input type="submit" value="Submit">

        </form> 
        
    </div>

</body>
</html>