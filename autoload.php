<?php

spl_autoload_register(function ($className) {
    $base = __DIR__ . '/src/';

    $prefix = 'BareBone\\';
    $baseLength = strlen($prefix);

    if (strncmp($prefix, $className, $baseLength) === 0) {
        $className = substr($className, $baseLength);
    }

    $classPath = str_replace('\\', '/', $className);
    $file = sprintf('%s%s.php', $base, $classPath);

    if (file_exists($file)) {
        require $file;
    }
});