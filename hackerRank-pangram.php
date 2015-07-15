<?php
//Problem  : Pangram
//Problem URL :https://www.hackerrank.com/challenges/pangrams
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
    
    
    $line = trim(fgets(STDIN)); //to read a line from std-in
    $uStr = strtoupper ($line); //converting to upper case
    $len = strlen ($uStr);
    $chrc = array_fill(0,25,0); //to initalize an array 
    
    for($i=0; $i < $len ;) 
    {
       if (ord($uStr{$i}) == 32)   //eliminate spaces
       {
             $i++;       
       }    
       else
       {
           $chrc[((ord($uStr[$i])) - 65)] = 1;                                
           $i++;
       }
    }

    for($j = 0; $j < 26 ; $j++)
    {      
          if($chrc[$j] != 1)
          {
             echo "not pangram";
             return;
          }                                
    }
     echo "pangram";       
?>
