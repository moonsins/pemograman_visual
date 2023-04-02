<?php

function sayHello(string $name, $filter)
{
  $fullname = $filter($name);
  echo "Hi $fullname" . PHP_EOL;
}

function sampleName(string $name): string
{
  return "My name is $name" . PHP_EOL;
}

sayHello("Muhammad Fauzan", "strtoupper");
sayHello("Muhammad Fauzan", "strtolower");
