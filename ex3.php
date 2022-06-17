<?php

$mois = array(
'Janvier' => 31 , 'Février' => 28, 'Mars' => 31, 'Avril' => 30,
    'Mai' => 31, 'Juin' => 30,
    'Juillet'=> 31, 'Aout' => 31, 'Septembre' => 30, 'Octobre' => 31,
    'Novembre' => 30, 'Décembre' => 31
);

echo "<table 1px border solid black>";
echo "<tr><th> Mois </th> <th> Nombre de jours </th></tr>";

foreach ($mois as $clef => $valeur)
{
    echo ("<tr><td> $clef </td><td> $valeur </td></tr>");
}
echo "</table>";

?>

