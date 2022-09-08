<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'altaah1package';

    /**
     * Default PageTS for Altaah1package
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'altaah1package'
    );
});

$temporaryColumn = array(
    'tx_altaah1package_dropheader' => array (
            'exclude' => 0,
            'label' => 'Header in Dropdownmenu',
            'config' => array (
                'type' => 'input',
                'max' => 255                        
            )
    )
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'pages',
    $temporaryColumn
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'title',
    'tx_altaah1package_dropheader',
    'after:nav_title'
);