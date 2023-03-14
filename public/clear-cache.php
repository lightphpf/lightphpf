<?php

/**
 * Author: Soulaimane Yahya
 * Date: 2023-03-14
 */

use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;

require_once __DIR__ . '/autoload.php';

// Get the location of the cache directory
$cacheDir = $config['app_root'] . '/Bootstrap/Cache';
// $cacheDir = sys_get_temp_dir() . '/app/Bootstrap/Cache';

// Delete the contents of the cache directory
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($cacheDir, RecursiveDirectoryIterator::SKIP_DOTS),
    RecursiveIteratorIterator::CHILD_FIRST
);

foreach ($files as $fileinfo) {
    $action = ($fileinfo->isDir() ? 'rmdir' : 'unlink');
    $action($fileinfo->getRealPath());
}
