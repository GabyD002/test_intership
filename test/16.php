<?php
	  
    class A
    {
        public function afiseazaDetalii()
        {
            print(" afiseazaDetalii parinte ");
        }
    }
    
    class B extends A
    {   
        
        public function afiseazaDetalii()
        {    
            parent::afiseazaDetalii();
            print(" afiseazaDetalii copil ");
        }
    }   
    
    $C = new B;
    $C->afiseazaDetalii();
?>