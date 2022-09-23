<?php
	
	// php loops : while, do while, for, foreach
	
	$array = array();
	for($i = 0; $i < 100; $i++)
	  $array[$i] = $i;
	
	//while
	echo "while: ";
	
	$i = -1;
	
	while (++$i < count($array)) 
	  echo !($i%2) ? $array[$i].' ' : '';
	
	echo "\ndo while: ";
	
	//do while
	$i = 0;
	
	do 
	  echo !($i%2) ? $array[$i].' ' : '';
  while(++$i<count($array));
  
  echo "\nfor: ";
	
	//for
	for($i = 0; $i < count($array); $i++) 
	  echo !($i%2) ? $array[$i].' ' : '';
	    
	 echo "\nforeach: ";
	 
	 //foreach
	 foreach($array as $array_value)
	   echo !($array_value%2) ? $array_value.' ' : '';
	   
?>