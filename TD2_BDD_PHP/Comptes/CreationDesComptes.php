<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation -Compte </title>
</head>
<body>

<h2>Creation des Comptes</h2>
        <form action="" method="POST">

            <input type="text" name="cpteNum">
            <input type="text" name="cpteType">
            <input type="text" name="cpteSolde">
            <input type="text" name="cpteClient">

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

$cpteNum = isset($_POST['cpteNum']) ? $_POST['cpteNum'] : '';
$cpteType = isset($_POST['cpteType']) ? $_POST['cpteType'] : '';
$cpteSolde = isset($_POST['cpteSolde']) ? $_POST['cpteSolde'] : '';
$cpteClient = isset($_POST['cpteClient']) ? $_POST['cpteClient'] : '';


    $sql = "insert into compte(cpteNum,cpteType,cpteSolde,cpteClient) VALUES ('$cpteNum','$cpteType' ,'$cpteSolde','$cpteClient')";

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


