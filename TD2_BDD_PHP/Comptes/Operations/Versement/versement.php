<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Versment </title>
</head>
<body>

<h2>VERSEMENT </h2>
        <form action="" method="POST">

            <input type="text" name="cpteNum">
            <input type="text" name="cpteSolde">

            <input type="submit" value="Versement"name="submit"></input>

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
        $cliNum = $_POST['cliNum'];
        $cliNom = $_POST['servNom'];
        $cliPrenom = $_POST['cliPrenom'];
        $cliCPostal = $_POST['cliCPostal'];
        $cliVille = $_POST['cliVille'];
        */
        
        $cpteNum = isset($_POST['cpteNum']) ? $_POST['cpteNum'] : '';
        $cpteSolde = isset($_POST['cpteSolde']) ? $_POST['cpteSolde'] : '';
        
        if(isset($_POST['submit'])){
        
        
        
            $sql = "UPDATE compte SET cpteSolde = cpteSolde +   '$cpteSolde' WHERE cpteNum = '$cpteNum'";

            if(!mysqli_query($con,$sql)) {
                echo 'Not inserted';
            }
            else
            {
                echo 'La ligne est inserer';
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
            
                    ?>
</body>
</html>


