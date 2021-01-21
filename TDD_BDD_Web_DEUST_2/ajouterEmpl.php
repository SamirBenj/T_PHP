<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recherche_Employe</title>
</head>
<body>  



<p>Recherche Employe</p>
<form action="" method="POST">
<input type="text" name="empNum">
<input type="text" name="empNom">
<input type="text" name="empPrenom">
<input type="text" name="empDateEmbauche">
<input type="text" name="empSalaire">
<input type="text" name="empService">

<input type ="submit" value="ajouter"></input>


</form>
<?php
    $user ="root";
    $pass= "toor";
    $db = "employes";
    $table = "employe";
    

    //connexion à la BDD
    $link = mysqli_connect( "localhost", $user, $pass );


    if($link->connect_error){
        die('Erreur : ' .$link->connect_error);
    }
    echo 'Connexion réussie';
    mysqli_select_db( $link,$db);
    //requete 
    $empNum = isset($_POST['empNum']) ? $_POST['empNum'] : '';
    $empNom = isset($_POST['empNom']) ? $_POST['empNom'] : '';
    $empPrenom = isset($_POST['empPrenom']) ? $_POST['empPrenom'] : '';
    $empDateEmbauche = isset($_POST['empDateEmbauche']) ? $_POST['empDateEmbauche'] : '';
    $empSalaire = isset($_POST['empSalaire']) ? $_POST['empSalaire'] : '';
    $empService = isset($_POST['empService']) ? $_POST['empService'] : '';

    //$requete1 = "INSERT INTO $table (`empNum`, `empNom`, `empPrenom`, `empDateEmbauche`, `empSalaire`, `empService`) VALUES ('$empNum','$empNom','$empPrenom','$empDateEmbauche','$empSalaire','$empService')";
    $requete1 = "INSERT INTO $table (`empNum`) VALUES ('$empNum')";

    //execution
    $result = mysqli_query($link,$requete1);
    
    $num_rows = mysqli_num_rows($result);
    print "<b><u>La requete retourne </u> <b>$num_rows lignes </b><P>";
    echo "\n";

    print "<table bgcolor=yellow border=2>\n";
    
    while ( $a_row = mysqli_fetch_row( $result ) )
    {
        print "<tr>\n";
        foreach ( $a_row as $field ) 
        print "\t<td>$field</td>\n";
        print "</tr>\n";
 }

     print "</table>\n";

    mysqli_close( $link ); 


    ?>


</body>
</html>