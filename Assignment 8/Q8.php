<?php
$age = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
// a) Ascending by value
asort($age);
print_r($age);
// b) Ascending by key
ksort($age);
print_r($age);
// c) Descending by value
arsort($age);
print_r($age);
// d) Descending by key
krsort($age);
print_r($age);
?>