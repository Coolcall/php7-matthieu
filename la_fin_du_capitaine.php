<?php
$captainAge = 23;
$captainName = "Jacques Spareau";
$captainDead = "true";
$captainWords = "AAaaargh";

$captain = [
    'age' => $captainAge,
    'name' => $captainName,
    'is_dead' => $captainDead,
    'famous_last_words' => $captainWords,
];

if($captain['is_dead'] == true) {
    print "Le capitaine ".$captain['name']." est mort à l'age de ".$captain['age']." ans.\n";
    print "Ses derniers mots étaient ".$captain['famous_last_words'].".\n";
}
