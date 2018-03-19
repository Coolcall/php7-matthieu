<?php
$numbre1 = readline("écrit le premier nombre : ");
$numbre2 = readline("écrit le deuxième nombre : ");
$operation = readline("quel calcule voulez vous faire : addition, soustraction, multiplication ou division? : ");
$result;


if(is_numeric($numbre1) AND is_numeric($numbre2) == true){
    switch ($operation){
        case 'addition':
        $result = $numbre1 + $numbre2;
        print $numbre1." + ".$numbre2." = ".$result."\n";
        break;

        case 'soustraction':
        $result = $numbre1 - $numbre2;
        print  $numbre1." - ".$numbre2." = ".$result."\n";
        break;

        case 'multiplication':
        $result = $numbre1 * $numbre2;
        print  $numbre1." * ".$numbre2." = ".$result."\n";
        break;

        case 'division':
        if($numbre2 == 0){
            print "La division est impossible";
        } else{
            $result = $numbre1 / $numbre2;
            print  $numbre1." / ".$numbre2." = ".$result."\n";
        }
    }
} else{
    print "Ces nombres n'existe pas.";
}
