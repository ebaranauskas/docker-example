<?php

declare(strict_types=1);

namespace App;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

return Config::create()
    ->setFinder(Finder::create()->in(__DIR__)->exclude(['bin', 'var']))
    ->setRiskyAllowed(true)
    ->setUsingCache(false)
    ->setRules([
        '@PhpCsFixer:risky' => true,
        '@PHPUnit75Migration:risky' => true,
        '@PHP73Migration' => true,
        '@PHP71Migration:risky' => true,
        'date_time_immutable' => true,
        'final_class' => true,
        'final_public_method_for_abstract_class' => true,
        'final_static_access' => true,
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => true,
        ],
        'linebreak_after_opening_tag' => true,
        'self_static_accessor' => true,
        'simplified_null_return' => true,
        'static_lambda' => true,
        'php_unit_strict' => false,
    ])
;
