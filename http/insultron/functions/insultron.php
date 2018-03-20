<?php

require_once(__DIR__.'/array_rand.php');
function insultron() {
    $complément = arrayRand(require(__DIR__.'/../data/complément.php'));
    $nom = arrayRand(require(__DIR__.'/../data/nom.php'));
    $verbe = arrayRand(require(__DIR__.'/../data/verbe.php'));
    return sprintf(
        "Tu es %s et tu  %s %s !\n",
        $nom,
        $verbe,
        $complément
    );
}
