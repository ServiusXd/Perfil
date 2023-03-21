<?php  

    $file = "lindo.txt";
    $texto = "Paola, como estas?";
    $fp = fopen($file, "w");
    fwrite($fp, $texto);    
    fclose($fp);
    
?>