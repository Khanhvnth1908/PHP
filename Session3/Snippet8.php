<?php
include 'Snippet7.php';
use aptech\{Boston,NewYork};
use function aptech\{foo1,foo2};
$d = new Boston();
$d->say();

echo "</br>";
$n = new NewYork();
$n->say();
echo "</br>";
$n->foo1();
echo "</br>";
$n->foo2();