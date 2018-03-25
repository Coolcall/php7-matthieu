<?php

function MostRatedSeries(int $top) {
    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);
    $MostRatedSeries = [];
    $Series = " ";
    foreach ($shows as $key => $value) {
         $MostRatedSeries[$key] = $shows[$key]["statistics"]["rating"];
     }

     arsort($MostRatedSeries);
     $SeriesOrderByRated = array_keys( $MostRatedSeries);

     foreach($shows as $key => $value) {
         if ($SeriesOrderByRated[$top] == $shows[$key]["slug"]) {
           $Series=$shows[$key];
         }
     }
     return $Series;
}
