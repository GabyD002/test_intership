<?php
	
	$arr = ["unu", "doi", "trei"];
	
	if(count($arr) <= 3)
	  echo "Array has maximum 3 elements\n";
  else
    echo "Array has more than 3 elements\n";
  
  if(3 < count($arr))
    echo "Key 3 exists\n";
  else
    echo "Key 3 doesn't exist\n";
  
  if($arr[2] == "doi")
    echo "key 2 has value doi\n";
  else
  if($arr[2] == "trei")
    echo "key 2 has value trei\n";
    
?>