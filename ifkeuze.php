<?php

$naam=readline("Geef jouw naam : ");
$leeftijd=readline("Geef jouw leeftijd : ");
$getal=21;

if ( $leeftijd < $getal ) {
    echo "Jij bent jonger dan $getal jaar.\n";
}
if ( $leeftijd > $getal ) {
    echo "Jij bent ouder dan $getal jaar.\n";
}
if ( $leeftijd == $getal ) { 
   echo "Jij bent precies $getal jaar.\n";
}
 echo "$naam $leeftijd jaar oud.";
?>