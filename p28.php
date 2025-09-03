<?php
$arr= [10,20,30,46,88,99,100,92,20,30];
echo "Original Array: ";
print_r($arr);
echo"<br>";
$unique=array_unique($arr);
echo "Array after removing duplicates: ";
print_r($unique);
?>