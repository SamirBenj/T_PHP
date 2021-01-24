<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TD2_BDD_PHP/style.css" rel="stylesheet">

    <title>DEBITER </title>
</head>
<body>

<h2>DEBITER </h2>
    <div class="middle">
            <form action="" method="POST">
                <td>Numero du Compte</td>
                <input type="text" name="cpteNum"><br></br>

                <td>Solde</td>
                <input type="text" name="cpteSolde">
                <br></br>
                <input type="submit" value="Debiter"name="submit"/>
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

        
        $cpteNum = isset($_POST['cpteNum']) ? $_POST['cpteNum'] : '';
        $cpteSolde = isset($_POST['cpteSolde']) ? $_POST['cpteSolde'] : '';
        
        if(isset($_POST['submit'])){
        
            
            if(empty($cpteNum) || empty($cpteSolde)) {
                echo '<b>Inserer la valeur !</b>';
            }else {
                $sql = "UPDATE Compte SET cpteSolde = cpteSolde - '$cpteSolde' WHERE cpteNum = '$cpteNum'";


            if(!mysqli_query($con,$sql)) {
                echo '<b>Votre retrait n a pas pu être réalisée </b>'; 
            }
            else
            {
               echo '<b>Votre retrait à était réalisée</b>';

            }
            }
            

        /*
            //Affichage tableau
            $result = mysqli_query($con,$sql);
        
            print " <h2>Liste des Comptes</h2> <table bgcolor=yellow border=2>\n";
            
            while ( $a_row = mysqli_fetch_row( $result ) )
            {
                print "<tr>\n";
                foreach ( $a_row as $field ) 
                print "\t<td>$field</td>\n";
                print "</tr>\n";
         }
        
             print "</table>\n";
        */
        }

if(isset($_POST['erase'])   ){
            echo '';
        }    
                    ?>
</body>
</html>


