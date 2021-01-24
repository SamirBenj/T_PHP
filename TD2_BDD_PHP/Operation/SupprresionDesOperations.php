<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TD2_BDD_PHP/style.css" rel="stylesheet">

    <title>Creation -Compte </title>
</head>
<body >

<h2>Suppresion d'une operation</h2>

    <div class="middle">
        <form action="" method="POST">
            <td>Numero de l'operation</td>
            <input type="text" name="opeNum">
            
            <br></br>
            <input type="submit" value="Supprimer" name="submit"></input>
            <input type="submit" name="erase" value="Effacer" >

        </form>
        
        <br>
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

$opeNum = isset($_POST['opeNum']) ? $_POST['opeNum'] : '';

    if(isset($_POST['submit'])){

    
        if((empty($cliNum) || empty($cliNom) || empty($cliPrenom) ||empty($cliCPostal) ||empty($cliVille) || empty($cliMdp) )) {
            echo '<b>Inserer la valeur<b>';
        
        }else{
            $sql = "DELETE FROM Operation WHERE opeNum = '$opeNum'";

            if(!mysqli_query($con,$sql)) {
                echo '<b>Votre demande n a pas pu être réalisée</b>';
            }
            else
            {
                echo '<b>Votre demande a etait réalisée</b>';
            }
        }

    }

    
            ?>
</body>
</html>


