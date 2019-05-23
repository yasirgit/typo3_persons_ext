<?php

/**
 * Base TCA generation for the model OH\\Persons\\Domain\\Model\\Person
 */

$base = \HDNET\Autoloader\Utility\ModelUtility::getTcaInformation('OH\\Persons\\Domain\\Model\\Person');

// custom manipulation calls here
$custom = [
    'columns' => [
        'first_name' => [
            'config' => [
                'type' => 'input',
            ],
        ],

        'last_name' => [
            'config' => [
                'type' => 'input',
            ],
        ],

        'is_employer' => [
            'label' => 'Employer:',
            'config' => [
                'type' => 'check'
            ]
        ],

        'profile_pic' => [
            'exclude' => 1,
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'profile_pic',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'minitems' => 1,
                    'maxitems' => 1,
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],

        'role' =>  [
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_baseoh_domain_model_role',
                'foreign_table' => 'tx_baseoh_domain_model_role',
                'foreign_where' => ' AND tx_baseoh_domain_model_role.deleted = 0
                                         AND tx_baseoh_domain_model_role.hidden = 0
                                         AND tx_baseoh_domain_model_role.t3ver_oid = 0
                                         ORDER BY tx_baseoh_domain_model_role.title',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,

                'show_thumbs' => 1,
                'wizards' => [
                    'suggest' => [
                        'type' => 'suggest',
                    ],
                ],
            ],
        ],

    ],

    'palettes' => [
        'main' => [
            'showitem' => 'first_name, last_name',
        ],
        'email' => [
            'showitem' => 'email, phone',
        ],
        'role' => [
            'showitem' => 'role, is_employer',
        ],
        'profile' => [
            'showitem' => 'profile_pic'
        ],
        'imageproperty' => [
            'showitem' => 'image_width, image_height'
        ],
        'classquote' => [
            'showitem' => 'section_class, quote'
        ],
        'linkedinprofile' => [
            'showitem' => 'linkedin_profile'
        ],
        'potrait' => [
            'showitem' => 'potrait'
        ],
        'sayhellopotrait' => [
            'showitem' => 'say_hello_potrait'
        ],
        'text' => [
            'showitem' => 'description'
        ],
    ],

    'types' => [
        '1' => [
            'showitem' => ',--div--;General
                                   ,--palette--;;main
                                   ,--palette--;;email
                                   ,--palette--;;role
                                ,--div--;Media
                                   ,--palette--;;profile
                                   ,--palette--;;imageproperty
                                ,--div--;Founder
                                   ,--palette--;;classquote
                                   ,--palette--;;linkedinprofile
                                   ,--palette--;;potrait
                                   ,--palette--;;sayhellopotrait
                                   ,--palette--;;text
                                ,--div--;Access
                                   ,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access
                               '
        ],
    ],
];

$tca = \HDNET\Autoloader\Utility\ArrayUtility::mergeRecursiveDistinct($base, $custom);

//\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($tca); die();

return $tca;