<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation -Client </title>
</head>
<body>
    <h2>Creation des clients</h2>
        <form action="" method="POST">

            <input type="text" name="cliNum">


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
$cliNum = 
$cliNom = 
$cliPrenom = 
$cliCPostal =
$cliVille = 
*/

$cliNum = isset($_POST['cliNum']) ? $_POST['cliNum'] : '';
$cliNom = isset($_POST['cliNom']) ? $_POST['cliNom'] : '';
$cliPrenom = isset($_POST['cliPrenom']) ? $_POST['cliPrenom'] : '';
$cliCPostal = isset($_POST['cliCPostal']) ? $_POST['cliCPostal'] : '';
$cliVille = isset($_POST['cliVille']) ? $_POST['cliVille'] : '';
$cliMdp = isset($_POST['cliMdp']) ? $_POST['cliMdp'] : '';


   // $sql = "insert into client(cliNum,cliNom,cliPrenom,cliCPostal,cliVille,cliMdp) VALUES ('$cliNum','$cliNom' ,'$cliPrenom','$cliCPostal', '$cliVille','$cliMdp')";
   
    $sql = "update client set 
    cliNum = $cliNum 
    cliNom =$cliNom 
    cliPrenom= $cliPrenom 
    cliCPostal=$cliCPostal 
    cliVille= $cliVille where cliNum = '$cliNum'";
    
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


