<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TD2_BDD_PHP/style.css" rel="stylesheet">
<title>Creation -Compte </title>
</head>
<body>

<h2>Suppresion D'un Compte</h2>
    <div class="middle">
            <form action="" method="POST">
                <td>Numero du compte</td>
                <input type="text" name="cpteNum">
                <br></br>

                <input type="submit" value="Supprimer" name="submit"></input>
                <input type="submit" name="erase" value="Effacer">

            </form>
            
        <br>
        <a href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TD2_BDD_PHP/" style="color : inherit;">Retour au menu</a>
    </div>
        <?php

$con = mysqli_connect('localhost', 'root', 'toor');

$cpteNum = isset($_POST['cpteNum']) ? $_POST['cpteNum'] : '';

if(!$con) {
    echo 'Not connected to database';
}

if(!mysqli_select_db($con, 'dbcomptes')) 
{
    echo 'Database Not selected';
}

if(isset($_POST['submit'])){

    $sql = "DELETE FROM Compte WHERE cpteNum = '$cpteNum'";

    if(!mysqli_query($con,$sql)) {
        echo '<b>Le Compte n a pas pu être supprimer</b>';
    }
    else
    {
        echo ' <br> <b>Compte supprimer</b>'; 
    }

}

if(isset($_POST['erase'])) {
    echo '';
}
            ?>

</body>
</html>


