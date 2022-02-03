<?php

/**
 * Extension Manager/Repository config file for ext "keatchen_love".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'keatchen-love',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'fluid_styled_content' => '10.4.0-10.4.99',
            'rte_ckeditor' => '10.4.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'KeatchenLove\\KeatchenLove\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Juri Richter',
    'author_email' => 'juri-richter@gmx.de',
    'author_company' => 'keatchen-love',
    'version' => '1.0.0',
];
