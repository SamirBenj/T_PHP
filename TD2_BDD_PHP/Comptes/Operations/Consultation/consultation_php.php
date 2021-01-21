<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation </title>
</head>
<body>

<h2>VERSEMENT </h2>
        <form action="" method="POST">

            <input type="text" name="cpteNum">
            <input type="password" name="cliMdp">

            <input type="submit" value="Consulter"name="submit"></input>

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
        $cliMdp = isset($_POST['cliMdp']) ? $_POST['cliMdp'] : '';
        
        if(isset($_POST['submit'])){
        
        
        
            //$sql = "select * from Compte where (SELECT cliNom FROM client where cliMdp = '$cliMdp')";
            $sql = "select cpteNum,cpteClient, cpteType, cpteSolde from Compte, Client where client.cliMdp = '$cliMdp'";
        
        
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
        
        }
            
                    ?>
</body>
</html>


