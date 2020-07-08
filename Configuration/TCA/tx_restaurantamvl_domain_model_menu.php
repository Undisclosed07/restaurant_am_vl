<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:restaurant_am_vl/Resources/Private/Language/locallang_db.xlf:tx_restaurantamvl_domain_model_menu',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'name,description',
        'iconfile' => 'EXT:restaurant_am_vl/Resources/Public/Icons/tx_restaurantamvl_domain_model_menu.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, price, description, service, available, discount, entries, main_dishes, cheeses, desserts, drinks',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, price, description, service, available, discount, entries, main_dishes, cheeses, desserts, drinks, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_restaurantamvl_domain_model_menu',
                'foreign_table_where' => 'AND {#tx_restaurantamvl_domain_model_menu}.{#pid}=###CURRENT_PID### AND {#tx_restaurantamvl_domain_model_menu}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:restaurant_am_vl/Resources/Private/Language/locallang_db.xlf:tx_restaurantamvl_domain_model_menu.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'price' => [
            'exclude' => false,
            'label' => 'LLL:EXT:restaurant_am_vl/Resources/Private/Language/locallang_db.xlf:tx_restaurantamvl_domain_model_menu.price',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2,required'
            ]
        ],
        'description' => [
            'exclude' => false,
            'label' => 'LLL:EXT:restaurant_am_vl/Resources/Private/Language/locallang_db.xlf:tx_restaurantamvl_domain_model_menu.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim,required',
            ],
            
        ],
        'service' => [
            'exclude' => false,
            'label' => 'LLL:EXT:restaurant_am_vl/Resources/Private/Language/locallang_db.xlf:tx_restaurantamvl_domain_model_menu.service',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['Midi', SERVICE_NOON], //Menu::TYPE_NOON
                    ['Soir', SERVICE_EVENING] //Menu::TYPE_EVENING
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => 'required'
            ],
        ],
        'available' => [
            'exclude' => false,
            'label' => 'LLL:EXT:restaurant_am_vl/Resources/Private/Language/locallang_db.xlf:tx_restaurantamvl_domain_model_menu.available',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'discount' => [
            'exclude' => false,
            'label' => 'LLL:EXT:restaurant_am_vl/Resources/Private/Language/locallang_db.xlf:tx_restaurantamvl_domain_model_menu.discount',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'entries' => [
            'exclude' => false,
            'label' => 'LLL:EXT:restaurant_am_vl/Resources/Private/Language/locallang_db.xlf:tx_restaurantamvl_domain_model_menu.entries',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_restaurantamvl_domain_model_dish',
                'MM' => 'tx_restaurantamvl_menu_dish_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
            
        ],
        'main_dishes' => [
            'exclude' => false,
            'label' => 'LLL:EXT:restaurant_am_vl/Resources/Private/Language/locallang_db.xlf:tx_restaurantamvl_domain_model_menu.main_dishes',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_restaurantamvl_domain_model_dish',
                'MM' => 'tx_restaurantamvl_menu_maindishes_dish_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
            
        ],
        'cheeses' => [
            'exclude' => false,
            'label' => 'LLL:EXT:restaurant_am_vl/Resources/Private/Language/locallang_db.xlf:tx_restaurantamvl_domain_model_menu.cheeses',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_restaurantamvl_domain_model_dish',
                'MM' => 'tx_restaurantamvl_menu_cheeses_dish_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
            
        ],
        'desserts' => [
            'exclude' => false,
            'label' => 'LLL:EXT:restaurant_am_vl/Resources/Private/Language/locallang_db.xlf:tx_restaurantamvl_domain_model_menu.desserts',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_restaurantamvl_domain_model_dish',
                'MM' => 'tx_restaurantamvl_menu_desserts_dish_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
            
        ],
        'drinks' => [
            'exclude' => false,
            'label' => 'LLL:EXT:restaurant_am_vl/Resources/Private/Language/locallang_db.xlf:tx_restaurantamvl_domain_model_menu.drinks',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_restaurantamvl_domain_model_drink',
                'MM' => 'tx_restaurantamvl_menu_drink_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
            
        ],
    
    ],
];
