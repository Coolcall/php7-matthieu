<?php
$characters = file_get_contents($argv[1]);

$occurences = [];

for ($i = 0; $i <strlen($characters) ; $i++) {
    $c = $characters[$i];
    if ($c == ''|| $c == "\n"){
        continue;
    }

    if (isset($occurences[$c])) {
        $occurences[$c]++;
    } else {
        $occurences[$c] = 1;
    }
}

arsort($occurences);
print_r($occurences);
print array_sum($occurences);
