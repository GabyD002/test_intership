<?php
	
	function print_type($data) {
	  
	  switch(gettype($data)) {
	    
	    case 'integer': echo "Tip Intreg\n"; break;
	    case 'string': echo "Tip String\n"; break;
	    default: echo "Tip Default\n"; break;
	  }
	}
	
	$integer_type = 2;
	
	print("$integer_type is ");
	print_type($integer_type);
	
  $string_type = 'a';
	
	print("$string_type is ");
	print_type($string_type);
	
  $default_type = 2.2;
	
	print("$default_type is ");
	print_type($default_type);
	   
?>