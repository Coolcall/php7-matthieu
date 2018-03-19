<?php

$sport = [
    "wintersport" => ['ski', 'ski de fond', 'curling', 'bobsleigh', 'super G'],
    "fightsport" => ['judo', 'boxe', 'escrime', 'karaté'],
    "ballsport" => ['football', 'handball', 'volleyball', 'basketball'],
];
print $sport["fightsport"][0]."\n";
$sport["fightsport"][0]='boxe thai';
print $sport["fightsport"][0];
