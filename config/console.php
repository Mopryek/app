<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * Console config.
 *
 * @see App::console()
 * @see App::run()
 * @see https://docs.aplus-framework.com/guides/projects/app/config/console.html
 */
return [
    'default' => [
        'directories' => [
            APP_DIR . 'Commands',
        ],
        'find_in_namespaces' => false,
        'language_instance' => 'default',
        'locator_instance' => 'default',
    ],
];
