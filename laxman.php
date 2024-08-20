<?php

$input='AAAABBBCCDAABBB';
$output = [];

for ($i=0; $i <   strlen($input); $i++) { 
    if(isset($output[count($output) - 1]) == false || $output[count($output) - 1] != $input[$i]){
        $output[] = $input[$i];
    } 
}
print_r($output);