<?php

$i = 0;
$j = 0;
$countSup5 = 0;
$countInf5 = 0;
$nb = 0;
$countPair = 0;
$countImpaire =0;
$ValeurPoucentage = 100;

$nbvaleur = isset($_POST['nbvaleur']) ? $_POST['nbvaleur'] : '';

//Fonction test si le nombre est par ou impaire
    function is_pair2($num){
        if($num%2==0){
        return true;
        } else {
        return false;
        }
    }

    function pourcentage($nbTest,$Sum,$pourcentage) {
        $resultatPourcentage = ($nbTest/$Sum)*$pourcentage;
        return $resultatPourcentage; 
    }

if( isset($_POST['submit'])) {

    for($i=1;$i<=$nbvaleur;$i++)
            {
                $nb++;
                    $nombre[$i] = rand(1,10);
                    //valeur <= 5
                    if($nombre[$i] <= 5 ) {
                        $countInf5++;
                    }
                    //valeur valeurs supérieures strictement à 5
                    if($nombre[$i] > 5 ) {
                        $countSup5++;
                    }

                    if(is_pair2($nombre[$i])) {
                        $countPair++;
                    }else {
                        $countImpaire++;
                    }
                    echo '<p> valeur '.$nb.' = ' .$nombre[$i].'<p>';

                    
            }
    }

echo '<p color="blue"> nombre de valeurs inférieures ou égales à 5 => '.$countInf5.'</p>' ;

echo '<p> nombre de valeurs supérieures strictement à 5 => '.$countSup5.'</p>';

echo '<b> <p>Le Nombre de valeur pair est => '.$countPair.'</p><b>';

echo '<b> Le Nombre de valeur impair est => '.$countImpaire.'</b>';

echo '<p> Le pourcentage de nombre pair est => '.pourcentage($countPair,$nbvaleur,$ValeurPoucentage).' %</p>';

echo '<p> Le pourcentage de nombre impair est => '.pourcentage($countImpaire,$nbvaleur,$ValeurPoucentage).' %</p>';

?>