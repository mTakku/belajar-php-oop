<?php

require_once("data/person.php");

$person = new Person("Mercys", "Cileungsi");
$person->name = "Mercys";
$person->address = "Cileungsi";
$person->country = "Indonesia";

var_dump( $person );

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Putra", null);
$person2->name = "Putra";
$person2->address = null;

var_dump( $person2 );