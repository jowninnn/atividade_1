<?php
    $frase = 'essa frase é so pa so pa';
    
    
    $tam = strlen($frase);
    $palavras = str_split($frase);
    
    $i;
    
    
    
    
    for($i=0; $i<$tam; $i++) {
        
        
        
        if($palavras[$i] == ' ') {
            $i++;  
        }
        echo $palavras[$i];
    }
?>