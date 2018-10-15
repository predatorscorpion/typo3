<?php
defined('TYPO3_MODE') or die();

// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    array(
        'LLL:EXT:typo3_learning/Resources/Private/Language/locallang.xlf:wizard.title',
        'typo3learning_jumbotron',
        'content-image'
    ),
    'CType',
    'typo3_learning'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    array(
        'btn_text' => array (
            'label' => 'Btn text',
            'config' => [
                'type' => 'input',
                'max' => 30,
            ]
        ),
        'btn_link' => array (
            'label' => 'Btn link',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
            ]
        )
    )
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'jumbotron_headers',
    'header,--linebreak--, subheader',
    ''
);

// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['typo3learning_jumbotron'] = array(
    'showitem' => '
      --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
         --palette--;;jumbotron_headers,
         bodytext,
         btn_link,
         btn_text,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
   ',
    'columnsOverrides' => [
        'header' => [
            'config' => [
                'eval' => 'required'
            ]
        ],
        'subheader' => [
            'config' => [
                'max' => 150,
            ]
        ],
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default'
            ]
        ]
    ]
);
