<?php

$myName = 'An';
$myAge = '19';
$myNine = true;
$myHeight = 1.99;
$myRelax = ['relax1' => 'chess', 'relax2' => 'logic', 'relax3' => 'game'];

$resule = strlen($myName);
echo $resule;

foreach ($myRelax as $key = $value){
	echo $key . 'has value = ' . $value . '<br />';
}

/**
 * Lay thong tin ca nhan cua toi
 * 
 * string $name: Ten
 * int $age: Tuoi
 * array $relax: So thich
 * return string
 */
function getMyProfile($name, $age, $relax){
	$description = 'My name is ' . $name;
	$description .= ' ' . $age . 'year old';
	$description .= '. I like '
	foreach ($relax as $value){
		$description .= $value . ', ';

	}
	return $description;
}
echo getMyProfile();
?>
