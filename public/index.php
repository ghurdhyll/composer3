<?php
require '../vendor/autoload.php';

use App\Hello;

// $bonjour = new Hello();

// echo $bonjour->talk();

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

$bessie->setTongue('U');

echo $bessie;