<?php
$test = Array(1,2,3);
$test = [1,2,3];
$test = [1, 'woof:3', true, [1,2,3] ];
$test = [
    1,
    'name' => 'celeste',
    'age' => 23,
    3,
    'meaow:3',
    true,
    100 => 'qwq',
    'O/////O',
];
var_dump($test['name']);
array_push ($test, 'O_O', 'mrow :3',3);
$test[] = 'new :3';
$test['name'] = 'Rem';
$test[1] = 67;
unset($test[3]);
var_dump($test);
