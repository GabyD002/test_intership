<?php
	
		$array = array();
		
	    for($i = 0; $i < 100; $i++)
	  $array[$i] = $i;
	  
	  // from 0 to 99
	  echo "from 0 to 99\n";
	  
	  for($i=0; $i<count($array); $i++) {
	    
	    echo $i.' ';
	    
	    if(!($i%5))
	      break;
	  }
	  
	  echo "\n";
	  
	  for($i=0; $i<count($array); $i++) {
	    
	    echo $i%5 ? $i.' ' : '';
	  }
?>