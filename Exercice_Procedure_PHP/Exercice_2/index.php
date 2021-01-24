<?php
$v =0;
$countPair = 0;
$countImPair = 0;
//fonction pair ou impair
function is_pair2($num){
    if($num%2==0){
    return true;
    } else {
    return false;
    }
}

//Fonction pourcentage
function pourcentage($nbTest,$Sum,$pourcentage) {
    $resultatPourcentage = ($nbTest/$Sum)*$pourcentage;
    return $resultatPourcentage; 
}


    print "<form method=POST action=index.php>";
    print "<p><b>Entre les valeur :</b></p>";

    for($i=0; $i<10; $i++) {
        $v++;
        print " <td>Valeur ".$v." = </td> <input type=text name=txt$i /> <br></br>"; 

    }
    print "<br><input type=submit value=submit />";
    print "</form>";


    $arr = array();
    if(isset($_POST['txt0']))
    {
        for($i=0; $i<9; $i++) {
            $arr[$i] = $_POST['txt'.$i];
           if(is_pair2($arr[$i])){
               $countPair++;
           }else{
            $countImPair++;
           }

        }
    }

    
  

 

echo '<b> <p>Le Nombre de valeur pair est => '.$countPair.'</p><b>';

echo '<b> Le Nombre de valeur impair est => '.$countImPair.'</b>';

echo '<p> Le pourcentage de nombre pair est => '.pourcentage($countPair,10,100).' %</p>';

echo '<p> Le pourcentage de nombre impair est => '.pourcentage($countImPair,10,100).' %</p>';

echo '<b> La Somme des valeurs du tableaux est => '.array_sum($arr).'</b>';

?>