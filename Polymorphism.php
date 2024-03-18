<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Mercys");
var_dump($company);

$company->programmer = new BackendProgrammer("Mercys");
var_dump($company);

$company->programmer = new FrontendProgrammer("Mercys");
var_dump($company);

sayHelloProgrammer(new Programmer("Mercys"));
sayHelloProgrammer(new BackendProgrammer("Mercys"));
sayHelloProgrammer(new FrontendProgrammer("Mercys"));