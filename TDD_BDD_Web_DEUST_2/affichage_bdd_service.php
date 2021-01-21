<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TDD_BDD</title>
</head>
<body>  
    <?php
    
    $user ="root";
    $pass= "toor";
    $db = "employes";
    $table = "SERVICE";
    
    //connexion à la BDD
    $link = mysqli_connect( "localhost", $user, $pass );


    if($link->connect_error){
        die('Erreur : ' .$link->connect_error);
    }
    echo 'Connexion réussie';
    mysqli_select_db( $link,$db);
    //requete 

    $requete = "SELECT * FROM $table";
    //$requete = "select * FROM $table where sevrNom  ='Marketing' ";

    //execution
    $result = mysqli_query($link,$requete);
    
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