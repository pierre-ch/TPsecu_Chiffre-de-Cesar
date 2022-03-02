<html>
    <head>
        <title>
            Chiffre de césar
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
        <br>
        <div class="container-sm" align=center>
            <form action=messageCrypte.php method=GET>

                <?php
                    echo '<input type=text minlength=1 maxlength=100 name=phrase> <br>';
                    echo '<input type=number min=1 max=26 name=cle value=1';
                ?>

            <br><br>
            <input class="btn btn-danger" type="reset" value="Annuler">
            <input class="btn btn-primary" type="submit" value="Crypter">
            </form>
        </div>
    </body>