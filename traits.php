<?php

require_once "data/sayGoodbye.php";

use Data\Traits\{Person, sayHello, SayGoodbye};

$person = new Person();
$person->goodBye("Punpun");
$person->hello("Aiko");

$person->name = "";
var_dump($person);

$person->run();