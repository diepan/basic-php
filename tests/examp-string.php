<?php

//$animals = [
//   'Ga', 'Cho', 'Meo'
//];

//Me em di cho mua Ga, Cho, Meo.

//$str = 'Me em di cho mua';

//foreach($animals as $animal) {
 //  $str .= ' ' . $animal . ',';
//}
//$str = substr($str,0,-1);
//$str = substr($str,0,-1);
//echo $str;

//bai tap
$students = [
    'An', 'Dat', 'Hanh'
];
$relaxs = [
    'bong cuoi', 'bong ban', 'bong da'
];
$hobby = 'rat thich choi';
$str = 'Cac ban';
foreach($students as $student){
    $str .= ' '. $student .',';
}
$str = substr($str,0,-1);

$str .= ' ' . $hobby; 
foreach($relaxs as $relax){
    $str .= ' ' .$relax .',' ;
}
$str = substr($str,0,-1) . '.';
echo($str);
//out put str= "Cac ban An, Dat, Hanh rat thich choi bong cuoi, bong ban, bong da."
