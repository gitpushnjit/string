<?php

  
  $text = "This is My Text";
  $array = array(1,2,3,4,5,6,7,8,9,10);
  

  class main {

    public function __construct() {

      echo 'Hello I am a Contructor </br>';
    }

      public function myprint($text) {                     
      echo '<h1>Print Function Demo </h1>';
      print($text);
      echo '<hr>';
    }

    
      public function printArray($array) {                 
      echo '<h1>Array Print Function</h1>';
      print_r($array);
      echo '<hr>';
    }
    
   
      public function __destruct() {

      echo '</br> I am a Destructor';

    }
  
      
      public function mycslashes(){                              
        echo '<h1>This is cslash function demo</h1>';
    echo addcslashes("NJIT", 'A..Z');
        echo '<hr>';
    }
      
      public function explodeuse(){                            
         echo '<h1>This is explode function demo</h1>';
    $str = 'january| february| march| april| may';
     print_r(explode('|', $str, 4));         
        echo '<hr>';       
    }
      
      
      public function casesensitive(){                         
   echo '<h1> First letter Lowercase function demo</h1>';
   $mlc= 'HIGHLANDER';
   $mlc= lcfirst($mlc);
   echo "$mlc";
   echo '<hr>';
     }
      
      public function strlength(){   
   echo '<h1>String length of - </h1>';   
   echo '<h2>NJIT Highlander Pipeline</h2>';
   $string = 'NJIT Highlander Pipeline';
   echo strlen($string);    
   echo '<hr>'; 
     }         
      
      
      public function lowcase(){
    echo '<h1>Everything to lower case </h1>';
    echo '<h2>NJIT is THe Best UniVersiTy</h2>';   
    $str = "NJIT is THe Best UniVersiTy";
    $str = strtolower($str);
    echo $str;
    echo '<hr>';           
     }
      
      
      public function upcase(){
    echo '<h1>Everything to upper case </h1>';
    echo '<h2>njit is tHe Best uNiversiTy</h2>';   
    $str = "njit is tHe Best uNiversiTy";
    $str = strtoupper($str);
    echo $str;
    echo '<hr>';           
     }  
      
      
      public function stringcompare(){
    echo '<h1> String Comparision Demo</h1>';
    $var1= "NJIT";
    $var2= "Newark";
    if (strcmp($var1,$var2)!==0)
     {
      echo "$var1 and $var2 are not equal";
     }
    echo '<hr>';
     }
      
      
     public function stringsplit($text){
   echo '<h1> splitstring function demo</h1>';
   $spt=str_split($text);
   print_r($spt);
   echo '<hr>';
     }         

  }

$obj = new main();
$obj->myprint($text);
$obj->printArray($array);
$obj->mycslashes();
$obj->explodeuse();
$obj->casesensitive();
$obj->strlength(); 
$obj->lowcase();
$obj->upcase();
$obj->stringcompare();
$obj->stringsplit($text);
?>
