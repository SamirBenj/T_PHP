<?php
$con = mysqli_connect('127.0.0.1', 'root', 'toor');

if(!$con) {
    echo 'Not connected to database';
}

if(!mysqli_select_db($con, 'employes')) 
{
    echo 'Database Not selected';
}

$servCode = $_POST['servCode'];
$servNom = $_POST['servNom'];
$servBatiment = $_POST['servBatiment'];
$servTel = $_POST['servTel'];



    $sql = "insert into service(servCode,sevrNom,servBatiment,servTel) VALUES ('$servCode','$servNom' ,'$servBatiment','$servTel')";

    if(!mysqli_query($con,$sql)) {
        echo 'Not inserted';
    }
    else
    {
        echo 'La ligne est inserer';
    }
header("refresh:2; url=index.php");
?>