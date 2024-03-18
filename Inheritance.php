<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Mercys";
$manager->sayHello("Putra");

$vp = new VicePresident();
$vp->name = "Farel";
$vp->sayHello("Thona");