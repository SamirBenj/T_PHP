<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TD2_BDD_PHP/style.css" rel="stylesheet">

    <title>Creation -Compte </title>
</head>
<body>

<h2>Creation des Comptes</h2>
    <div class="middle">
        <form action="" method="POST">
            <td>Numero de Compte</td>
            <input type="text" name="cpteNum">

            <br></br><td>Type d'operation</td>
            <input type="text" name="cpteType">
            
            <br></br><td>Solde</td>
            <input type="text" name="cpteSolde">
            <br></br><td>Numero compte client</td>
            <input type="text" name="cpteClient">
            <br></br>

            <input type="submit" value="ajouter" name="submit"/>
            <input type="submit" value="Effacer" name="erase"/>

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


$cpteNum = isset($_POST['cpteNum']) ? $_POST['cpteNum'] : '';
$cpteType = isset($_POST['cpteType']) ? $_POST['cpteType'] : '';
$cpteSolde = isset($_POST['cpteSolde']) ? $_POST['cpteSolde'] : '';
$cpteClient = isset($_POST['cpteClient']) ? $_POST['cpteClient'] : '';

if(isset($_POST['submit'])){
    
    if((empty($cpteNum) || empty($cpteType) || empty($cpteSolde) || empty($cpteClient) )) {

        echo '<b>Inserer la/les valeur(s)';
    
    }else{
        $sql = "INSERT INTO Compte(cpteNum,cpteType,cpteSolde,cpteClient) VALUES ('$cpteNum','$cpteType' ,'$cpteSolde','$cpteClient')";

        if(!mysqli_query($con,$sql)) {
            echo '<b>le compte n a pas etait créer</b>';
        }
        else
        {
            echo '<b>le compte est creer <b>';
        }
    }
}

if(isset($_POST['erase'])   ){
    echo '';
}
            ?>
</body>
</html>


