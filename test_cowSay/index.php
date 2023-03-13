<?php

require '../vendor/autoload.php';
// require '/vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');
$bessie2 = new Cow('I am sticking out my tongue');

// store the output in a variable
$output = $bessie->say();
echo $output;

// or just echo the object for direct output
// echo $bessie;

$bessie2->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $bessie2;
