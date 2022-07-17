<?php

/*
 Judul   : Simpel fungsi warna
 Editor  : iewil
 Github  : https://github.com/iewilmaestro
 Sumber  : https://www.if-not-true-then-false.com/2010/php-class-for-coloring-php-command-line-cli-scripts-output-php-output-colorizing-using-bash-shell-colors/
*/

const 
List_Warna_String = [
	'black' 		=> '0;30',
	'dark_gray' 	=> '1;30',
	'blue' 			=> '0;34',
	'light_blue' 	=> '1;34',
	'green' 		=> '0;32',
	'light_green' 	=> '1;32',
	'cyan' 			=> '0;36',
	'light_cyan' 	=> '1;36',
	'red' 			=> '0;31',
	'light_red' 	=> '1;31',
	'purple' 		=> '0;35',
	'light_purple' 	=> '1;35',
	'brown' 		=> '0;33',
	'yellow' 		=> '1;33',
	'light_gray' 	=> '0;37',
	'white'		 	=> '1;37'
],
List_Warna_Latar = [
	'black' 		=> '40',
	'red' 			=> '41',
	'green' 		=> '42',
	'yellow'	 	=> '43',
	'blue' 			=> '44',
	'magenta' 		=> '45',
	'cyan' 			=> '46',
	'light_gray' 	=> '47'
];

function color($string, $warna_string = 0, $Warna_Latar = 0){
	$String_Berwarna = "";
	if (isset(List_Warna_String[$warna_string])) {
		$String_Berwarna .= "\033[" . List_Warna_String[$warna_string] . "m";
	}
	if (isset(List_Warna_Latar[$Warna_Latar])) {
		$String_Berwarna .= "\033[" . List_Warna_Latar[$Warna_Latar] . "m";
	}
	$String_Berwarna .=  $string . "\033[0m";
	return $String_Berwarna;
}

//Mewarnai string
$string = "Hello World";
$warna_string = "black";
$warna_latar = "blue";

//Tes 1 string
print color($string ,$warna_string , $warna_latar) . "\n\n";

//Test semua warna string
foreach ( array_keys(List_Warna_String) as $warna_string ){ 
	foreach( array_keys(List_Warna_Latar) as $warna_latar ){
		print " ".color($string,$warna_string, $warna_latar) . "\t";
	}
	print "\n";
}
