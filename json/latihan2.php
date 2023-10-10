<?php

$data = file_get_contents('https://pokeapi.co/api/v2/');
$name = json_decode($data, true);

var_dump($name);

?>
