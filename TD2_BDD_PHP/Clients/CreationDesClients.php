<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TD2_BDD_PHP/style.css" rel="stylesheet">

    <title>Creation -Client </title>
</head>
<body >
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
            <input type="text" name="cliCpostal">

            <br></br><td>Ville du Client</td>
            <input type="text" name="cliVille">
            
            <br></br><td>Mot de passe</td>
            <input type="password" name="cliMdp">

            <br></br>
            <input type="submit" value="Ajouter" name="submit"></input>
            <input type="submit" value="Effacer" name="erase"></input>

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


$cliNum = isset($_POST['cliNum']) ? $_POST['cliNum'] : '';
$cliNom = isset($_POST['cliNom']) ? $_POST['cliNom'] : '';
$cliPrenom = isset($_POST['cliPrenom']) ? $_POST['cliPrenom'] : '';
$cliCpostal = isset($_POST['cliCpostal']) ? $_POST['cliCpostal'] : '';
$cliVille = isset($_POST['cliVille']) ? $_POST['cliVille'] : '';
$cliMdp = isset($_POST['cliMdp']) ? $_POST['cliMdp'] : '';


    if(isset($_POST['submit'])) {

        if((empty($cliNum) || empty($cliNom) || empty($cliPrenom) ||empty($cliCpostal) ||empty($cliVille) || empty($cliMdp) )) {
            echo '<b>Inserer la/les valeur(s)';
        
        }else{

            $sql = "INSERT INTO Client(cliNum,cliNom,cliPrenom,cliCpostal,cliVille,cliMdp) VALUES ('$cliNum','$cliNom' ,'$cliPrenom','$cliCpostal', '$cliVille','$cliMdp')";

            if(!mysqli_query($con,$sql)) {
                echo '<b>le client n a pas etait créer<b>';
            }else
                {
                    echo '<b>le client est creer<b>';
                }
    
            }
        }

if(isset($_POST['erase'])   ){
    echo '';
}
    
            ?>

            
</body>
</html>


