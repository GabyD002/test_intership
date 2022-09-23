<?php
	  
    class A
    {
        public function __construct()
        {
            echo "test";
        }
    }
    
    class B extends A
    {
       public function __construct() {
         
         parent::__construct();
       }
    }    
    
    $C = new B;
?>