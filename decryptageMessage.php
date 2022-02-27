<html>
    <head>
        <title>
            Chiffre de César
        </title>
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

        <?php
            $chaine = $_POST['leMessage'];
        ?>
        <br>
        <div class="container-sm" align=center>
            <strong>Message crypté :</strong><br>
            <?php
                echo $chaine;
            ?>
            <br><br>
            <?php
                $alphabet = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
                $tabFrequence = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
                $tabMsg = str_split($chaine); //met chaque caractère du message crypté dans un tableau
                $car = $alphabet[0];
            ?>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Logs fréquence d'appararition
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
            <?php
                for ($i=0; $i<count($alphabet); $i++) //lettre par lettre
                {
                    $car = $alphabet[$i]; echo '<h3><i>lettre</i> '.$car.'</h3><br>';
                    $c = 0; 

                    for ($tabMsg[$c]; $c<count($tabMsg); $c++) //caractère par caractère
                    {
                        echo '<h5><i>Caractère '.$c.'</i> : '.$tabMsg[$c].'</h5>';
                        if ($tabMsg[$c] == $car) //si le caractere est égale à celui de lettre par lettre alors
                        {
                            $tabFrequence[$i]++; 
                            echo '⇒ La lettre '.$car.' est détecté <br>';
                            echo 'Compteur lettre '.$car.' = '.$tabFrequence[$i].' fois <br><br>';
                        }
                        else
                        {
                            echo '<br>';
                        }

                    }

                }
            ?>
                    </div>
                    </div>
                    </div>
                    </div>
                    <br>

            <?php

                //Calcul savoir la valeur du tableau où il y a la plus grande fréquence
                $keyMax = array_search(max($tabFrequence), $tabFrequence);

                echo '<strong>Le rang de la lettre la plus fréquence est le :</strong> '.$keyMax;
                echo ' (soit '.$alphabet[$keyMax].')<br>';

                //Calcul clé cryptage
                $cle = (4 - $keyMax);
                $cle = abs($cle); //transforme chiffre neg en positif
                echo '<strong>La clé de cryptage est de :</strong> '.$cle;

                echo '<br>';
                $i = 0;
                for ($tabFrequence[$i]; $i<count($tabFrequence); $i++)
                {
                    $tabFrequence[$i] = $tabFrequence[$i] + $cle;
                    echo $alphabet[$i].' '.$tabFrequence[$i].'<br>';
                }


            ?>
         
        </div>
        <br>
        <div class="container-sm" align=center>
            
            <br><br>
            <input class="btn btn-light" type="button" value="Retour" onclick="history.back()">
        </div>
    </body>