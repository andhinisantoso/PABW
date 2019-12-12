<?php
$a=100;
$b=50;
echo "Nilai A = $a <br>";
echo "Nilai B = $b <br>";
function swap (&$num1, &$num2){
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
}
swap($a,$b);
echo "<br>";
echo "Nilai A = $a <br>";
echo "Nilai B = $b <br>";
?>