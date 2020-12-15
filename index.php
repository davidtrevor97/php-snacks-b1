<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack 1</title>
  </head>
  <body>
    <!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri,
    2. che mail contenga un punto e una chiocciola
    3. e che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
    <!-- ?name=david&mail=david@gmail.com&age=23 -->
    <?php
    $name =  $_GET["name"];
    if ( strlen($name) > 3 ) {
      echo "$name è più lungo di tre caratteri ";
    }
    else {
      echo "$name è meno lungo di tre caratteri  ";
    };
    $mail =  $_GET["mail"];
    echo strpos( $mail, "@" )  ;
    $age =  $_GET["age"];
    echo $age ;
     ?>
  </body>
</html>
