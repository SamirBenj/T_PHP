<?php
$con = mysqli_connect('127.0.0.1', 'root', 'toor');

if(!$con) {
    echo 'Not connected to database';
}

if(!mysqli_select_db($con, 'employes')) 
{
    echo 'Database Not selected';
}

$empNum = isset($_POST['empNum']) ? $_POST['empNum'] : '';
$empNom = isset($_POST['empNom']) ? $_POST['empNom'] : '';
$empPrenom = isset($_POST['empPrenom']) ? $_POST['empPrenom'] : '';
$empDateEmbauche = isset($_POST['empDateEmbauche']) ? $_POST['empDateEmbauche'] : '';
$empSalaire = isset($_POST['empSalaire']) ? $_POST['empSalaire'] : '';
$empService = isset($_POST['empService']) ? $_POST['empService'] : '';



    $sql = "INSERT INTO $table (empNum, empNom, empPrenom, empDateEmbauche, empSalaire, empService) VALUES ('$empNum','$empNom','$empPrenom','$empDateEmbauche','$empSalaire','$empService')";

    if(!mysqli_query($con,$sql)) {
        echo 'Not inserted';
    }
    else
    {
        echo 'La ligne est inserer';
    }
header("refresh:2; url=index.php");
?>