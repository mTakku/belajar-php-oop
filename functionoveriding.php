<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Mercys");

$vp = new VicePresident();
$vp->name = "Mercys";
$vp->sayHello("Budi");