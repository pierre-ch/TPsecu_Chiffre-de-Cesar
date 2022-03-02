<html>
<form action=messageVerif.php method=GET>  

<?php

    $phraseNonCrypte = $_GET['phrase'];
    echo $phraseNonCrypte.'<br>';
    $cle = $_GET['cle'];
    $alpha = array ('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'); 
    $chaine= "abcdefghijklmnopqrstuvwxyz";
    $tab=str_split($phraseNonCrypte);
    echo strlen($phraseNonCrypte).'<br>';
    for ($i=0; $i<strlen($phraseNonCrypte)-1; $i++)
    {
        $rang=strpos($chaine,$tab[$i])+$cle; //permet de definir la valeur a modifié
        if ($rang>25) //modifie la place du rang lorsque superieur à z
        {
            $rang=$rang-26;
        }
        $tab[$i]=$alpha[$rang];//permet de donner la nouvelle valeur au tableau crypté
    };
    for ($i=0; $i<strlen($phraseNonCrypte); $i++)
    {
        echo $tab[$i]; //affiche le message crypté
        $phraseCrypte=$tab[$i];
    }
    $e=implode ('',$tab);
    echo '<input type=hidden name=mot value='.$e.'> </input>';
?>

<br><br>
            <input class="btn btn-danger" type="reset" value="Annuler">
            <input class="btn btn-primary" type="submit" value="Suivant">
            </form>
</html>