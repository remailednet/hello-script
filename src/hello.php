#!/usr/bin/env php
<?php
function sayHello(string $name = 'world'): string {
    return "hello $name!";
}

if (php_sapi_name() === 'cli') {
    $name = $argv[1] ?? 'world';
    echo sayHello($name) . PHP_EOL;
}