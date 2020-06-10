<?php
$frame = "Doctor";
$name = "Who";
$planet = " Gallifrey";
$system = "Gridlock";
$constellation = "Kasterborous";

$contact = compact("frame", "name", "planet", "system", "constellation");
print_r($contact);