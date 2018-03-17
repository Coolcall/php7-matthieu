<?php

// les variables en camelCase = 75;
$captainAge = 75;
$parrotName = "Kikoubuster";
$shipName = "La barque";

// j'ai écrasé la valeur
$captainAge = 32;
$captainAge = "32 ans";

echo $captainAge . "\n"; // concaténation
echo 'Mon perroquet : ' .$parrotName. ', mon bateau : ' . $shipName . "\n";
