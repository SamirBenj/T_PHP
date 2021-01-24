<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TD2_BDD_PHP/style.css" rel="stylesheet">

    <title>Client - Liste</title>
</head>
<body >
    <?php

    $user ="root";
    $pass= "toor";
    $db = "dbcomptes";
    $table = "Client";


    $link = mysqli_connect( "localhost", $user, $pass );


 
    mysqli_select_db( $link,$db);
    //requete 

    $requete = "SELECT * FROM $table";

    //execution
    $result = mysqli_query($link,$requete);

    print " <div class=middle > <h2>Liste des clients</h2> <table bgcolor=yellow border=2>\n";
    
    while ( $a_row = mysqli_fetch_row( $result ) )
    {
        print "<tr>\n";
        foreach ( $a_row as $field ) 
        print "\t<td>$field</td>\n";
        print "</tr>\n";
 }

     print "</table>\n";
    ?>

        <br>
        <a href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TD2_BDD_PHP/" style="color : inherit;">Retour au menu</a>
</body>
</html>