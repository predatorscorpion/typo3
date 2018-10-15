<?php
defined('TYPO3_MODE') or die();

// Add an entry in the static template list found in sys_templates for static TS
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'typo3_learning',
    'Configuration/TypoScript',
    'Typo3 Learning'
);
