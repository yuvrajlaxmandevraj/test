<?php

$y = 012;
$x = $y/2;

echo 'output for $y = 012; $x = $y/2; is : ==== > '. $x;

echo "<br><br><br>";

$a =  "foo";
function  foo() 
{
    echo "hey";    
}
echo 'output for $a =  "foo"; function  foo() { echo "hey"; } $a(); ==== > ';
$a();



echo "<br><br><br>";

$val = 2;
function dosomething(){
    $val = 3;
}
echo "dosomething function local scope value was 3 and default value 2 and output is : ".$val;

echo "<br><br><br>";


function foos( &$arg )
{
    $z = $arg;
    $arg += 1;
    return $z;
}

$x = 3;
$y = foos( $x );

echo 'reference function $x = '. $x;
echo "<br>";
echo 'reference function $y = '. $y;

?>