<?php

defined('TYPO3') or die('Access denied.');

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'website2024';

    /**
     * Default PageTS for Website2024
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'website2024'
    );
});
