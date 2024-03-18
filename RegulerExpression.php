<?php

$matches = [];
$result = preg_match_all("/farel|mer|put/i", "Farel Mercys Putra", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "Dasar lu ANJING dan BANGSAT!");

var_dump($result);

$result = preg_split("/[\s,-]/", "Eko Kurniawan Khannedy, Programmer, Zaman-Now");

var_dump($result);
