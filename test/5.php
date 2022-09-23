<?php
	
	//for calc($s) return $x+1 we need to change return $x++ to return ++$x (pre increment)

	
	function calc($x) {
   return ++$x;
  }
	   
	print(calc(1));
?>