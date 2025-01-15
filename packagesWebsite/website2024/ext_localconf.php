<?php

defined('TYPO3') or die('Access denied.');

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['website2024'] = 'EXT:website2024/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:website2024/Configuration/TsConfig/Page/All.tsconfig">');

//Managing Translations von Typo3 Doku Managing Translations Custom Translation, default und übersetzung de
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:news/Resources/Private/Language/locallang.xlf'][] = 'EXT:website2024/Resources/Private/Language/locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:news/Resources/Private/Language/locallang.xlf'][] = 'EXT:website2024/Resources/Private/Language/de.locallang.xlf';
