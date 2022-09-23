<?php
	  
    interface Payments {
      
      function add();
      function delete();
    }
    
    class OnlinePayments implements Payments {
      
      private $number_of_payments = 0;
      
      function add() {
        
        $this->number_of_payments++;
      }
      
      function delete() {
        
        $this->number_of_payments--;
      }
    }
    
    $online_payments = new OnlinePayments;
    
    $online_payments->add();
    $online_payments->delete();
    
?>