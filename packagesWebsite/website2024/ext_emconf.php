<?php

/**
 * Extension Manager/Repository config file for ext "website2024".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'website2024',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Fhooe\\Website2024\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Anna Scheuchenpflug',
    'author_email' => 'scheuchenpflug.anna@gmail.com',
    'author_company' => 'fhooe',
    'version' => '1.0.0',
];
