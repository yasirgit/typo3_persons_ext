<?php
/**
 * $EM_CONF
 *
 * @category Extension
 * @package  Projects
 * @author   Yasir Arefin <y.arefin@orangehive.de>
 */

/** @var $_EXTKEY string */
$EM_CONF[$_EXTKEY] = [
    'title'       => 'OH Persons',
    'description' => '',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-7.99.99',
            'autoloader' => '1.11.1-9.9.9',
            'fluid_styled_content' => ''
        ],
    ],
    'clearCacheOnLoad' => true
];