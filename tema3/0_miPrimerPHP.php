<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo</title>
    </head>
    <body>

        <?php
        //Importante variables//
        var_dump($_SERVER);
        echo "¡Hola, soy un script de PHP!<br>";
        echo "---------------------------<br>";
        echo $_SERVER['HTTP_USER_AGENT']."<br>";
        echo "---------------------------<br>";
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE) {
            echo 'Está usando Microsoft Edge.<br />';
        }
        ?>
    </body>
</html>
