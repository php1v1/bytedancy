<?php

function classLoader($class)
{
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $path = explode(DIRECTORY_SEPARATOR, $path);
    $class = array_pop($path);
    $path = getSpacePath(join(DIRECTORY_SEPARATOR, $path));
    array_push($path, $class);
    $file = __DIR__ . '/src/' . join(DIRECTORY_SEPARATOR, $path) . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
}

/**
 * @param string $space
 * @return array|string[]
 */
function getSpacePath(string $space): array
{
    $list = [
        'Php1v1/Bytedance/payment' => 'payment',
        'Php1v1/Bytedance/Http' => 'Http',
    ];

    if(!isset($list[$space])) return [];

    if(empty($list[$space])) return [];

    return [$list[$space]];
}

spl_autoload_register('classLoader');

require_once  __DIR__ . '/function.php';