<!DOCTYPE html>
<head>
    <title>Message en clair</title>
    <meta http-equiv="content-type" content="text/html"; charset="UTF-8"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<header>
        <div class=container-sm align=center>
            <h1>Chiffre de César</h1>
            <h5>Par Pierre et Abdessamad</h5>
        </div>
    </header>
<body>
    <br>
    <div class="container-sm" align=center>
    <?php
        $rang;
        $cle;
        $msg;
        $msgCrypte = $_POST['leMessage'];
        $tabAlphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
        $tabMsg = str_split($msgCrypte);

        $nbApparition = 0;
        $lettreApparition;
        $finNbApparition = 0;
        $finLettreApparition = "";

        for ($i = 0; $i<count($tabAlphabet); $i++) {
            $nbApparition = 0;
            for ($x = 0; $x<count($tabMsg); $x++) 
            {
                if ($tabAlphabet[$i] == $tabMsg[$x]) 
                {
                    $nbApparition++;
                    $lettreApparition = $tabMsg[$x];
                }
            }
            if ($finNbApparition < $nbApparition) {
                $finNbApparition = $nbApparition;
                $finLettreApparition = $lettreApparition;
            }
        }

        // Calcul du rang
        for ($i = 0; $i < count($tabAlphabet); $i++) 
        {
            if ($finLettreApparition == $tabAlphabet[$i])
            {
                $rang = $i + 1;
            }
        }

        // Calcul de la cle
        for ($i = 0; $i < count($tabAlphabet); $i++) 
        {
            if ($finLettreApparition == $tabAlphabet[$i]) 
            {
                if ($i < 4) 
                {
                    $cle = 22 + ($rang - 1);
                }
                else 
                {
                    if ($i == 0) 
                    {
                        $cle = 0;
                    }
                    else 
                    {
                        $cle = ($rang - 1) - 4;
                    }
                }
            }        
        }

        // Decryptage
        $listCaracteres = str_split($msgCrypte);
        $newListCaracteres = [];

        for ($i = 0; $i < strlen($msgCrypte); $i++) 
        {
            $changeCaractere = "";
            for ($z = 0; $z < count($tabAlphabet); $z++) 
            {
                if ($listCaracteres[$i] == $tabAlphabet[$z]) 
                {
                    if ($z-$cle < 0)
                    {
                        $changeCaractere = $tabAlphabet[$z+count($tabAlphabet)-$cle];
                    }
                    else 
                    {
                        $changeCaractere = $tabAlphabet[$z-$cle];
                    }
                }
            }
            $changeListeCaracteres[$i] = $changeCaractere;
        }

        echo "Le rang de la lettre la plus fréquenté est le : ".$rang.'<br>';
        echo "Clé de cryptage  : ".$cle.'<br>';
        echo "Message décrypté : ";
        echo implode("", $changeListeCaracteres);
    ?>
    <br>
    <br>
    <input class="btn btn-secondary" value="Retour" onclick="history.back()">
    </div>
</body>
</html>