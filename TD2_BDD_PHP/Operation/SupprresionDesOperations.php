<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation -Compte </title>
</head>
<body>

<h2>Suppresion D'une Operation</h2>
        <form action="" method="POST">
        <input type="text" name="opeNum">

        <input type="submit" value="Supprimer"></input>

        </form>
        <?php

$con = mysqli_connect('localhost', 'root', 'toor');

if(!$con) {     
    echo 'Not connected to database';
}

if(!mysqli_select_db($con, 'dbcomptes')) 
{
    echo 'Database Not selected';
}

$opeNum = isset($_POST['opeNum']) ? $_POST['opeNum'] : '';



    $sql = "delete from operations where opeNum = '$opeNum'";

    if(!mysqli_query($con,$sql)) {
        echo 'Not Deleted';
    }
    else
    {
        echo 'Deleted';
    }

    
            ?>
</body>
</html>


