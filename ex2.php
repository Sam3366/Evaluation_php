<?php 
// FOR
$n = 4;  
$f = 1;  
for ($i=$n; $i>=1; $i--)   
{  
$f = $f * $i;  
}  
echo "La factorielle de $n est $f";
?>

<br>
<?php 
// While
$n = 4;  
$f = 1;
$i = 1;
while ($i<$n)
{
    $f = $f * $i;
    $i++;
}
echo "La factorielle de $n est $f";


?>