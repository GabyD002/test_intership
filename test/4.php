<?php
	
	function printString($string) {
	  
	  print($string);
	}
	
	$string = "String 1";
  $str = &$string;
  $str = "String 2";
  printString($string);
  // print String2 because $str gets a reference to $string, it means that $string and $str will share same value 
  $string = "String1";
  $str = "String 2";
  $string = $str;
  printString($string);
  // print again String2 because $string gets $str value through '=' operator
	   
?>