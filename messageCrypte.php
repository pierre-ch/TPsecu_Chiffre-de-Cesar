<?php

    $phraseNonCrypte = $_GET['phrase'];
    $cle = $_GET['cle'];
    $alpha = array ('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'); 
    $chaine={'abcdefghijklmnopqrstuvwxyz'};
    $tab=str_split($phraseNonCrypte);
    echo strlen($phraseNonCrypte);
    for ($i=0; $i<strlen($phraseNonCrypte); $i++);
    {
        $place=strpos($chaine, tab[$i]);
        $rang=$i+$cle
        $tab[$i]=$alpha[$i+$cle];
        echo $tab;
    };
    //echo $phraseNonCrypte;
?>
