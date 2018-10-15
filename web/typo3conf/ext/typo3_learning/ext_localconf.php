<?php
defined('TYPO3_MODE') or die();

// Include new content elements to modWizards
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:typo3_learning/Configuration/PageTSconfig/Typo3Learning.ts">'
);
