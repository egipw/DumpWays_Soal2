<?php

function salam($n)  
{ 
 
    if ($n == 0)  
        return 0; 
    else
        return ($n - 1) + salam($n - 1);  
} 
  

$n = 4; 
echo("Salaman = " .salam($n)); 

?> 