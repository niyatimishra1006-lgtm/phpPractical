<?php
$names=["swaeecha" =>61, "poornima" => 60,"yashi" => 40];
$key = "yashi";
if(array_key_exists($key,$names)){
    echo "key '$key' exists in the array";
}else{
        echo "key '$key' does not  the array";
    }
?>