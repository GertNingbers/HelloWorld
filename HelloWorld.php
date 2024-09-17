<?php

$tekst="Hello,World!\n";
$tekst9999999="Bob,says!\n";
$teller=1;
$maximum=10;

echo $tekst9999999;
echo $tekst;
echo $tekst;
echo $tekst;
echo $tekst; 
echo $tekst9999999;

while ( $teller <= $maximum ) {
    echo $tekst;
    $teller++;
}

echo "Shut up Bob!!!"

 ?>