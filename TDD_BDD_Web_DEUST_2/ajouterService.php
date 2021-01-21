<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ajouterService.php" method="POST">
<input type="text" name="servCode">
<input type="text" name="servNom">
<input type="text" name="servBatiment">
<input type="text" name="servTel">


<input type="submit" value="ajouter"></input>

<?php
$con = mysqli_connect('127.0.0.1', 'root', 'toor');

if(!$con) {
    echo 'Not connected to database';
}

if(!mysqli_select_db($con, 'employes')) 
{
    echo 'Database Not selected';
}

$servCode = isset($_POST['servCode']) ? $_POST['servCode'] : '';
$servNom = isset($_POST['servNom']) ? $_POST['servNom'] : '';
$servBatiment = isset($_POST['servBatiment']) ? $_POST['servBatiment'] : '';
$servTel = isset($_POST['servTel']) ? $_POST['servTel'] : '';



    $sql = "insert into service(servCode,sevrNom,servBatiment,servTel) VALUES ('$servCode','$servNom' ,'$servBatiment','$servTel')";

    if(!mysqli_query($con,$sql)) {
        echo '';
    }
    else
    {
        echo 'La Ligne est inserer';
    }
?>
</form>
</body>
</html>



