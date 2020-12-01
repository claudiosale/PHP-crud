<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Delete</title>
</head>
<body>
    
    <div class="container-create">

        <?php

        session_start();

        $_SESSION['del'] = $_GET['del'];

        ?>
         
        <h4>Confermi di voler eliminare?</h4>

        <form action='http://localhost/PHP/delete-fun.php'>

            <button>Si</button>

        </form>

        <button onclick="window.location.href = 'http\://localhost/PHP/index.php'">No</button>

    </div>

</body>
</html>