<?php
include("all-dependencies.php");

$emailBody = "
    Ciao __USERNAME__,
    sappiamo che hai comprato il prodotto __PRODUCTNAME__ in data __ORDERDATE__.
    Facci sapere come lo hai trovato: scrivi una recensione per ottenere subito il 10% di sconto!
";

sendMail( 'giorgio@shots.it', 'Giorgio', $emailBody );

?>