<?php

require_once './autoloader.php';

$str = new \Hillel\HomeWork\Str();
var_dump(\Hillel\HomeWork\Str::after('This is my name', 'is '));
var_dump(\Hillel\HomeWork\Str::afterLast('App\Http\Controllers\Controller', '\\'));
