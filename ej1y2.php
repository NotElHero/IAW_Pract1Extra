<?php
$num = $_GET['num'];
$suma = 0;
$fact = 1;

echo "Suma de los numeros<br>";
for ($i = 1; $i <= $num; $i++) {
    $suma += $i;
    echo $suma, "<br>";
}
echo "Factorial del numero<br>";
for ($j = 1; $j <= $num; $j++) {
    $fact *= $j;
    echo $fact, "<br>";
}
?>