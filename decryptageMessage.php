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
                for ($i=0; $i<count($alphabet); $i++) //lettre par lettre
                {
                    $car = $alphabet[$i]; echo ' ';
                    //echo $car;
                    for ($tabMsg[$i]; $i<count($tabMsg); $i++) //caractère par caractère
                    {
                        if ($tabMsg[$i] == $car) //si le caractere est égale à celui de lettre par lettre alors
                        {

                            echo  '('.$i.')';
                            $tabFrenquence[$i] = $tabFrenquence[$i] + 1; 
                            echo 'toto';
                        }
                    }

                }

                echo 'A= '.$tabFrenquence[0];

            ?>
            <br><br>
            <strong>Le rang de la lettre la plus fréquente est le : </strong>
         
        </div>
        <br>
        <div class="container-sm" align=center>
            
            <br><br>
            <input class="btn btn-light" type="button" value="Retour" onclick="history.back()">
        </div>
    </body>