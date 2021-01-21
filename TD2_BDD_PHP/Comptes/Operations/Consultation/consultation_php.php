<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/TEST_PHP/M.T_PHP/TD2_BDD_PHP/style.css" rel="stylesheet">
    <title>Consultation </title>
</head>
<body>

<h2>CONSULTATION DE COMPTE </h2>
<div class="middle">
        <form action="" method="POST" >
            <td>Numéro du Compte</td>
            <input type="text" name="cpteNum">
            <br></br><td>Mot de passe</td>
            <input type="password" name="cliMdp">
            <br></br>
            <input type="submit" value="Consulter"name="submit"></input>

        </form>
        
        <br>
        <a href="/TEST_PHP/M.T_PHP/TD2_BDD_PHP/" style="color : inherit;">Retour au menu</a>
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


