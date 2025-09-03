<?php
$arr=[4,6,2,9,8,7,2,9,40];
echo "original array:";
print_r($arr);
echo "<br><br>";

$temp=$arr;
sort($temp);
echo "sort()";
print_r( $temp)."<br>";



?>