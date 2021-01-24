<?php

$nbvaleur = isset($_POST['nbvaleur']) ? $_POST['nbvaleur'] : '';

//N = 10
$N10 = 10;
$CountNInf5  = 0;

if( isset($_POST['submit'])) {


    for($i=1;$i<=$N10;$i++)
    {
            $nombre[$i] = rand(1,10);
            if($nombre[$i] <= 5 ) {
                $CountNInf5++;
            }

    }


}

$test = 0;

$table = array(10,30,100,100,300,100);


for($j=0;$j<=5;$j++) {

for($table[$j]) {

}   
 $nombre[$table[$j]] = rand(1,10);

    echo '<p>'.$nombre[$table[$j]].'</p>';
}


/*
echo '
    <style>
        td , th {
            border: 1px solid black;
            padding: 10px;

        }
        table {
            border-collapse: collapse; 
        }
    </style>

<table >
    <tr>
        <th>N</th>
        <th>Nbre <= 5</th>
        <th>Nbre > 5</th>
        <th>% <= 5</th>
        <th>% > 5</th>
    </tr>

    <tr>
        <th>N=10</th>
        <th>'.$CountNInf5.'</th>

        <tr>
            <th>N=30</th>
            <th>'.$CountNInf5.'</th>
        </tr>
        <tr>
            <th>N=100</th>
            <th>'.$CountNInf5.'</th>
        </tr>
        <tr>
            <th>N=300</th>
            <th>'.$CountNInf5.'</th>
        </tr>
        <tr>
            <th>N=1000</th>
            <th>'.$CountNInf5.'</th>
        </tr>
        <tr>
            <th>N=5000</th>
            <th>'.$CountNInf5.'</th>
        </tr>           
    </tr>
</table>'

*/
?>