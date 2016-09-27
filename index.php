<?php

use HelloWorld\SayHello as SayHello;
use Pmartinez85\SayHello as SayHello2;


require __DIR__ . "/vendor/autoload.php";

require "src/SayHello.php";

//$sayhello = new \HelloWorld\SayHello();
//
//echo $sayhello->world();

echo SayHello::world();

//$sayhello = new Pmartinez85\SayHello();
//
//echo $sayhello->world();

echo SayHello2::world();