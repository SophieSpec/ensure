<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

// Prepare PHP environment
ini_set('display_errors', '1');
error_reporting(E_ALL);
ini_set('log_errors', '0');
ini_set('zend.assertions', '1');
ini_set('assert.exception', '1');

// Require spec files
foreach (new DirectoryIterator(__DIR__ . '/spec') as $fileInfo) {
    if ($fileInfo->isDot()) {
        continue;
    }
    /** @psalm-suppress UnresolvableInclude */
    require_once $fileInfo->getPathname();
}

// Still here?
echo "All good!\n";
