<?php

$stop = "nee";
$teller = 1;

while($stop =="nee" ) {

echo "dit is run $teller\n";

$stop = readline("wil je stopen [ja/nee] : ");
$teller++;
}

?>