<?php

declare(strict_types=1);

/**
 * This file is part of nextphp.
 *
 * @link     https://github.com/next-laboratory
 * @license  https://github.com/next-laboratory/next/blob/master/LICENSE
 */

return [
    'scanDirs'   => [
        __DIR__ . '/app',
    ],
    'collectors' => [
        \Next\Aop\Collector\AspectCollector::class,
        \Next\Aop\Collector\PropertyAttributeCollector::class,
    ],
    'runtimeDir' => __DIR__ . '/runtime/aop',
];
