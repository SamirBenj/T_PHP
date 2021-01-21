<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation -Compte </title>
</head>
<body>

<h2>Suppresion D'un Comptes</h2>
        <form action="" method="POST">
        <input type="text" name="cpteNum">

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
/*
$cliNum = $_POST['cliNum'];
$cliNom = $_POST['servNom'];
$cliPrenom = $_POST['cliPrenom'];
$cliCPostal = $_POST['cliCPostal'];
$cliVille = $_POST['cliVille'];
*/

$cpteNum = isset($_POST['cpteNum']) ? $_POST['cpteNum'] : '';



    $sql = "delete from compte where cpteNum = '$cpteNum'";

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


