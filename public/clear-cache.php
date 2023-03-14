#!/usr/bin/env php

<?php

/**
 * Author: Soulaimane Yahya
 * Date: 2023-03-14
 */

use App\Commands\ClearCache;

require_once __DIR__ . '/../vendor/autoload.php';

$clearCache = new ClearCache();
$clearCache->run();
