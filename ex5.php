<a href="ex5.php?command=1">1</a>
<a href="ex5.php?command=2">2</a>
<a href="ex5.php?command=3">3</a>

<?php
switch ($_GET['command']) {
    case 1:
        echo "Bonne matinée";
        break;
    case 2:
        echo "Bon appétit";
        break;
    case 3:
        echo "Bon après-midi";
        break;
    default:
        echo "Bonne soirée";
        break;
}
?>