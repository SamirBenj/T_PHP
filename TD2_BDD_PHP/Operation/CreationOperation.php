<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation -Compte </title>
</head>
<body>

<h2>Creation des Operation</h2>
        <form action="" method="POST">

            <input type="text" name="opeNum">
            <input type="text" name="opeType">
            <input type="text" name="opeDate">
            <input type="text" name="opeMontant">
            <input type="text" name="opeCpte">

            <input type="submit" value="ajouter"></input>

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

$opeNum = isset($_POST['opeNum']) ? $_POST['opeNum'] : '';
$opeType = isset($_POST['opeType']) ? $_POST['opeType'] : '';
$opeDate = isset($_POST['opeDate']) ? $_POST['opeDate'] : '';
$opeMontant = isset($_POST['opeMontant']) ? $_POST['opeMontant'] : '';
$opeCpte = isset($_POST['opeCpte']) ? $_POST['opeCpte'] : '';


    $sql = "insert into operations(opeNum,opeType,opeDate,opeMontant,opeCpte) VALUES ('$opeNum','$opeType' ,'$opeDate','$opeMontant','$opeCpte')";

    if(!mysqli_query($con,$sql)) {
        echo 'Not inserted';
    }
    else
    {
        echo 'La ligne est inserer';
    }

    
            ?>
</body>
</html>


