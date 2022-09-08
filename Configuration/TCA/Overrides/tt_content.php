<?php
defined('TYPO3_MODE') or die();



$temporaryColumn = array(
        'tx_altaah1package_inmainmenu' => array (
                'exclude' => 0,
                'label' => 'Element enabled in MainMenu',
                'config' => array (
                        'type' => 'check',
                        'renderType' => 'checkboxToggle',                        
                )
        ),
        'tx_altaah1package_indropmenu' => array (
               'exclude' => 0,
                'label' => 'Element enabled in DropMenu',
                'config' => array (
                        'type' => 'check',
                        'renderType' => 'checkboxToggle',                        
                )
        ),
        'tx_altaah1package_nav_title' => array (
                'exclude' => 0,
                'label' => 'Alternative Navigation Title',
                'config' => array (
                    'type' => 'input',
                    'max' => 255                        
                )
        )
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content',
        $temporaryColumn
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'tt_content',
        'hidden',
        'tx_altaah1package_inmainmenu, tx_altaah1package_indropmenu',
        'after:hidden'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'tt_content',
        'headers',
        'tx_altaah1package_nav_title',
        'after:subheader'
);