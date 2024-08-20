<?php
/*
echo"<pre>";

echo(abs(-6.7));
echo "<br>";

echo(sqrt(81));
echo "<br>";


echo((3**3));
echo "<br>";


echo((3%3));
echo "<br>";


foreach([1,2] as $val);{
  if(1 == 1){
    echo "dcdccd";
    echo "<br>";
  };
};

echo "<br>";
echo "<br>";


for ($i=0; $i < 2; $i++) { 
  if(1 == 1){
    echo "dcdccd";
    echo "<br>";
  };
}
echo "<br>";
echo "<br>";

$favcolor = "red";
switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
  case "blue":
    "Your favorite color is blue!";
  case "green":
    echo "Your favorite color is green!";
  default:
    echo "<br>";
    dd("default Message...!","dcdcdcdcdcdcdcdcdcdcdc");
}
*/

function dd(...$arg){
  echo "<pre><br>";
  foreach($arg as $printmsg){
    print_r($printmsg);
    echo "<br>==================================================================================================<br>";
  }
  echo "</pre>";
  exit;
}


function p($info,  $exit = 1){
  echo "<pre><br>";
  print_r($info);
  echo "</pre>";
  if($exit != 0){
    exit;
  }
}
$cars = ["FIRST", "LAST"];
array_push($cars, "Ford");
// dd($cars);

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// dd($car);

$cars = [];
$cars['aa'] = "Volvo";
$cars['bb'] = "Toyota";
$cars['cc'] = "BMW";
// dd($cars);

p($cars,0);
ksort($cars);
p($cars,0);
