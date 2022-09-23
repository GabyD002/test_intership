<?php
	
    // in class A private $cnp means that variable $cnp can be used just in class A, so I need to create a protected function that will return the private $cnp. I choose that function to be protected and not public because i want to use it just in child classes. Also i will create a protected funtion which will modify the $cnp

    class A
    {
        private $cnp;
        
        protected function set_cnp($new_cnp) {
          
          $this->cnp = $new_cnp;
        } 
        
        protected function get_cnp() {
          
          return $this->cnp;
        }
    }
    
    class B extends A
    {
        public function afiseazaDetalii()
        {
            // acceseaza variabia privata $cnp
            $this->set_cnp(5);
            echo $this->get_cnp();
        }
    }
    
    $C = new B;
    $C->afiseazaDetalii();
    
?>