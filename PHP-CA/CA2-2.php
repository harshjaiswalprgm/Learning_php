<?php
$arr1 = [1, 2, 3, 4, 5];
$arr = [4, 5, 6, 7, 8];

$mergedArray = array_merge($arr1, $arr);

$uniqueArray = array_unique($mergedArray); //removing duplicates
rsort($uniqueArray); //sort kr rhe hai ulta 
print_r($uniqueArray);

?>?>

