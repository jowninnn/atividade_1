<?php 
    $string = 'teste';
   
   
    $tam = strlen($string);
    
    
    
    $stringinvertida ='';

    
    
    for($i=$tam-1;$i<=$tam-1 && $i>=0;$i--)
    { 
        global $tam,$string;

       
       
        echo $string[$i];
    }
    
?>