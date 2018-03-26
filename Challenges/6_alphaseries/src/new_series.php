<?php
function new_series() {
    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);

    $slug = " ";
    if (isset($_GET["slug"])) {
        $slug = $_GET["slug"];
    }
    $newSeries = $shows[$slug];
    return $newSeries;
}
