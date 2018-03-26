<?php




function random_series() {

    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);
    $newArray = array_keys($shows);
    $randomBanner = mt_rand(0, count($newArray) - 1);
    $Series = $newArray[$randomBanner];
    return  $shows[$Series];


}
