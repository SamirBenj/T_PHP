<?php



$a = isset($_POST['valeur1']) ? $_POST['valeur1'] : '';
$b = isset($_POST['valeur2']) ? $_POST['valeur2'] : '';

$add = 0;
$sous = 0;
$multi = 0;
$divi = 0;


if( isset($_POST['addition'])) {

    function add($a ,$b)
    {
        $add = $a + $b;
        return $add;
    }

$add=add($a,$b);
echo '<p> Resultat addition = '.$add.'</p>';

}

//soustraction
if(isset($_POST['soustraction'])) {

    function soustraction($a ,$b)
    {
        $sous = $a - $b;
        return $sous;
    };

$sous=soustraction($a,$b);
echo '<p> Resultat soustraction = '.$sous.'</p>';

}
//multiplication
if(isset($_POST['multiplication'])) {

    function multiplication($a ,$b)
    {
        $multi = $a * $b;
        return $multi;
    };

$multi=multiplication($a,$b);
echo '<p> Resultat multiplication = '.$multi.'</p>';

}

//division
if(isset($_POST['division'])) {

    function division($a ,$b)
    {
        $divi = $a / $b;
        return $divi;
    };

$divi = division($a,$b);
echo '<p> Resultat division = '.$divi.   '</p>';

}



?>