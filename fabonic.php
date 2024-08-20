<?php 
$Num = 50;
$a = 0;
$b = 1;
echo $a;
echo "<br>";
echo $b;
echo "<br>";
for($i = 0; $i < 10; $i++){
    $c = $a + $b;
    $a = $b;
    $b = $c;
    echo $c."<br>";
}
?>