<?php

defined('TYPO3') or die('Access denied.');

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'website2024';

    /**
     * Default TypoScript for Website2024
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'website2024'
    );
});
