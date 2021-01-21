<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/TEST_PHP/M.T_PHP/TD2_BDD_PHP/style.css" rel="stylesheet">

    <title>Creation -Client </title>
</head>
<body>
    <h2>Creation des clients</h2>
    
    <div class="middle">

        <form action="" method="POST">
            <td>Numero client</td>
            <input type="text" name="cliNum">
            <br></br><td>Nom du client</td>
            <input type="text" name="cliNom">
            <br></br><td>Prenom du client</td>
            <input type="text" name="cliPrenom">
            <br></br><td>Code de postal</td>
            <input type="text" name="cliCPostal">
            <br></br><td>Ville du Client</td>
            <input type="text" name="cliVille">
            <br></br><td>Mot de passe</td>
            <input type="text" name="cliMdp">
            <br></br>
            <input type="submit" value="ajouter" name="submit"></input>

        </form>
    </div>
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

$cliNum = isset($_POST['cliNum']) ? $_POST['cliNum'] : '';
$cliNom = isset($_POST['cliNom']) ? $_POST['cliNom'] : '';
$cliPrenom = isset($_POST['cliPrenom']) ? $_POST['cliPrenom'] : '';
$cliCPostal = isset($_POST['cliCPostal']) ? $_POST['cliCPostal'] : '';
$cliVille = isset($_POST['cliVille']) ? $_POST['cliVille'] : '';
$cliMdp = isset($_POST['cliMdp']) ? $_POST['cliMdp'] : '';

if(isset($_POST['submit'])) {

    $sql = "insert into client(cliNum,cliNom,cliPrenom,cliCPostal,cliVille,cliMdp) VALUES ('$cliNum','$cliNom' ,'$cliPrenom','$cliCPostal', '$cliVille','$cliMdp')";

    if(!mysqli_query($con,$sql)) {
        echo 'le client n a pas etait créer';
    }
    else
    {
        echo 'le client est creer';
    }
}
    
            ?>
</body>
</html>


