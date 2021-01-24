<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TD2_BDD_PHP/style.css" rel="stylesheet">

    <title>Creation -Compte </title>
</head>
<body>

<h2>Creation des Operation</h2>
    <div class="middle">
        <form action="" method="POST">
            
            <td>Numero de l'operation</td>
            <input type="text" name="opeNum">
            
            <br></br><td>Type d'operation</td>
            <input type="text" name="opeType">
            
            <br></br><td>Date de l'operation</td>
            <input type="text" name="opeDate">
            
            <br></br><td>Montant de l'operation</td>
            <input type="text" name="opeMontant">
            
            <br></br><td>Numero du Compte</td>
            <input type="text" name="opeCpte">
            
            <br></br>
            <input type="submit" value="ajouter" name="submit"></input>
            <input type="submit" name="erase" value="Effacer">

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
$opeType = isset($_POST['opeType']) ? $_POST['opeType'] : '';
$opeDate = isset($_POST['opeDate']) ? $_POST['opeDate'] : '';
$opeMontant = isset($_POST['opeMontant']) ? $_POST['opeMontant'] : '';
$opeCpte = isset($_POST['opeCpte']) ? $_POST['opeCpte'] : '';

if(isset($_POST['submit'])){

    
    if((empty($opeNum) || empty($opeType) || empty($opeDate) ||empty($opeMontant) ||empty($opeCpte) )) {
        echo '<b>Inserer la/les valeur(s)';
    
    }else{
        $sql = "INSERT INTO Operation(opeNum,opeType,opeDate,opeMontant,opeCpte) VALUES ('$opeNum','$opeType' ,'$opeDate','$opeMontant','$opeCpte')";

        if(!mysqli_query($con,$sql)) {
            echo '<b>L operation  n a pas pu être créer</b>';
        }
        else
        {
            echo '<b>Operation creer</b>';
        }
    }
}
            ?>
</body>
</html>


