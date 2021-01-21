<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation -Compte </title>
</head>
<body>

<h2>Suppresion D'un Clients</h2>
        <form action="" method="POST">
        <input type="text" name="cliNom">

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

$cliNom = isset($_POST['cliNom']) ? $_POST['cliNom'] : '';



    $sql = "delete from client where cliNom = '$cliNom'";

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


