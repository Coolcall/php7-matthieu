<?php

require_once(__DIR__.'/src/random_series.php');

$randomSeries = random_series()["slug"];
header("Location:serie.php?slug=".$randomSeries);
