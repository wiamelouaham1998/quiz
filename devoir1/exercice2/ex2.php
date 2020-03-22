<?php
    try{
        $file=fopen("fichier.txt","r+");
    }catch(exception $e){
        die("Un Erreur ".$e);
    }
    $tab=[];
    $i=0;
    while($var=fgets($file))
        $tab[$i++]=explode(" | ",$var);
    echo '<pre>';
     print_r($tab);
    echo '</pre>';
    ?>