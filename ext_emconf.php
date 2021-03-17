<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "matomo_reporter"
 *
 * Auto generated by Extension Builder 2021-03-17
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'SLUB Matomo Reporter',
    'description' => 'Extension will fetch data from matomo and sends email to subscribers.',
    'category' => 'module',
    'author' => 'Alexander Bigga',
    'author_email' => 'typo3@slub-dresden.de',
    'state' => 'alpha',
    'uploadfolder' => '',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
