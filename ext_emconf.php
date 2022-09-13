<?php

/**
 * Extension Manager/Repository config file for ext "altaah1package".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'altaah1package',
    'description' => 'First alhaah TYPO3 Sitepackage',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'fluid_styled_content' => '10.4.0-10.4.99',
            'rte_ckeditor' => '10.4.0-10.4.99',
            'b13/container' => '10.4.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Altaah\\Altaah1package\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Alexander Ahmad',
    'author_email' => 'tamour@web.de',
    'author_company' => 'altaah',
    'version' => '1.0.0',
];
