<?php

if($argv[1] == "overwatch" OR $argv[1] == "LOL" OR $argv[1] == "CSGO" OR $argv[1] == "fornite"){
    print $argv[1]." est un jeux vidéo.\n";
}

if($argv[2] == "chien" OR $argv[2] == "chat" OR $argv[2] == "poulet" OR $argv[2] == "singe"){
    print $argv[2]." est un animal.\n";
}

if(is_numeric($argv[3])){
    print $argv[3]." est un nombre.\n";
}

print "Le ".$argv[2]." joue à ".$argv[1]." depuis ".$argv[3]." heures.";
