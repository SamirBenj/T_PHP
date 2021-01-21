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
<input type="text" name="nomEmploye">
<input type ="submit" value="rechercher"></input>


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
    $nomEmp = isset($_POST['nomEmploye']) ? $_POST['nomEmploye'] : '';
    $requete1 = "select * FROM $table";

    $requete1 = "select empNom FROM $table where empNom  like '%$nomEmp%'";

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