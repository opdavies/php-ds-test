<?php

require_once __DIR__.'/vendor/autoload.php';

$items = ['a', 1, 'b', 2, null, []];

$map = new \Ds\Map($items);

var_dump([
    'count' => $map->count(),
]);
