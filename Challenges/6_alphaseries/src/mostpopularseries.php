<?php

function MostPopularsSeries(int $top) {
    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);
    $MostPopularsSeries = [];
    $Series = " ";

    foreach ($shows as $key => $value) {
         $MostPopularsSeries[$key] = $shows[$key]["statistics"]["popularity"];
     }
     arsort($MostPopularsSeries);
     $SeriesOrderByPopularity = array_keys( $MostPopularsSeries);

     foreach($shows as $key => $value)  {
         if ($SeriesOrderByPopularity[$top] == $shows[$key]["slug"]) {
           $Series=$shows[$key];
         }
     }
     return $Series;
}
