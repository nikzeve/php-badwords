<?php

    $testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

    $parola_da_censurare = $_GET["parola"];

    $censura ='***';

    $testo = str_replace($parola_da_censurare, $censura, $testo);

    $lunghezza_testo = strlen($testo);

?>


<!DOCTYPE html>
<html>
 <head>
     <link rel="stylesheet" href="style.css">
     <title>Aggiungi censura</title>
 </head>
 <body>
     <div id="container">
         <p><span>Ecco il testo:</span> <?php echo $testo; ?> </p>
         <p><span>Ecco la parola censurata:</span> <?php echo $parola_da_censurare; ?></p>
         <p><span>Ecco la lunghezza del paragrafo:</span> <?php echo $lunghezza_testo; ?></p>
     </div>
 </body>
</html>
