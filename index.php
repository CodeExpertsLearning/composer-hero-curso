<?php
use Code\App\HelloWorld;

require __DIR__ . '/vendor/autoload.php';

new HelloWorld();

print '<hr>';

print showDateTime();

print '<hr>';

new Test();

print '<hr>';

new OtherTest();