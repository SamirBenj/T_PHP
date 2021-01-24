<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TD2_BDD_PHP/style.css" rel="stylesheet">
    <title>Supprimer -Compte </title>
</head>
<body>

<h2>Suppresion D'un Clients</h2>
    <form action="" method="POST">

    
    <div class="middle">
            <td>Nom du client &nbsp</td>
            <input type="text" name="cliNom">
            <br></br>

            <input type="submit" value="Supprimer" name="submit"></input>
            <input type="submit" value="Effacer" name="erase"></input>
    
        </form>

        <br></br>
        <a href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TD2_BDD_PHP/" style="color : inherit;">Retour au menu</a>
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

$cliNom = isset($_POST['cliNom']) ? $_POST['cliNom'] : '';


if(isset($_POST['submit'])) {

    if(empty($cliNom)) {
        echo '<b>Inserer le Nom !<b>';
    }else{
    $sql = "DELETE FROM client WHERE cliNom = '$cliNom' ";

    if(mysqli_query($con,$sql)) {

        echo '<b>Client supprimer<b>';
    }else
      {
        echo '<b>Le Client n a pas pu être réalisée<b>';

    }
}
    
}

if(isset($_POST['erase'])) {
    echo '';
}



            ?>
</body>
</html>


