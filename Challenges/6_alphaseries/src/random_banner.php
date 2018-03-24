<?php




function random_banner() {

    $json = file_get_contents('C:\wamp64\www\php7-matthieu\Challenges\6_alphaseries\data\shows.json');
    $shows = json_decode($json, true);
    $randomBanner = mt_rand(0, count($shows) - 1);

    $Banner = $randomBanner['images']['banner'];

    return sprintf(
        "$Banner"

    );


}
