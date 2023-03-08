<?php

require '../vendor/autoload.php';

use App\Hello;

$hello = new Hello;
echo $hello->talk();
