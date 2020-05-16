<?php

namespace Ziming;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function styles(Finder $finder = null, array $rules = []): Config
{
    $rules = array_merge(require __DIR__.'/rules.php', $rules);

    // If no finder is provided, this will be our default finder.

    $finder = $finder ?? Finder::create()
        ->notPath('app/nova')
        ->in([
            'app',
            'database',
            'routes',
            'tests',
        ]);

    return Config::create()
        ->setFinder($finder)
        ->setRiskyAllowed(true)
        ->setRules($rules);
}
