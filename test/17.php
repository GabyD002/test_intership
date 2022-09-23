<?php
	  
    class A
    {
        public $a = 100;
    }
    
    $obj = new A();
    $b = $obj; // copy
    $b->a = 101;
    print($b->a);// 101
    print($obj->a);// 101, because through '=' operator $a and $b will share same reference, so if one of them get modifies than both of them will sufer these modifies    
    
    echo "\n";
    
    $obj = new A();
    $b = clone $obj;
    $b->a = 101;
    print($b->a);// 101
    print($obj->a); // 100, because clone create another object with other reference
    
?>