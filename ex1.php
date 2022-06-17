<?php
$heure = date("H");
echo $heure . "<br>";
if ($heure < 12) {
    echo "Bonne matinée";
} 

elseif ($heure >= 12 && $heure < 14) {
    echo "Bon appétit";

} 
elseif ($heure >= 14 && $heure < 18) {
    echo "Bonne après-midi";

}
elseif ($heure >= 18) {
    echo "Bonne soirée";
}

?>