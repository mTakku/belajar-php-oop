<?php

require_once "data/person.php";

$mercys = new Person("Mercys", "Cileungsi");
$mercys->name = "Mercys";
$mercys->sayHello("Putra");


$putra = new Person("Putra", "Cirebon");
$putra->name = "Putra";
$putra->sayHello(null);

$mercys->info();
$putra->info();