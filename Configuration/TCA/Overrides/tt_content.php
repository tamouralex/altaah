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


\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'b13-1col-container', // CType
            'Container', // label
            'bootstrap container', // description
            [
                [
                    ['name' => 'center', 'colPos' => 201]
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    ->setIcon('EXT:altaah1package/Resources/Public/Icons/Custom-Icon-Design-Mono-Business-2-Coffee.ico')
);



\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'b13-2cols5050-container', // CType
            '50% 50%', // label
            'bootstrap 50 50', // description
            [
                [
                    ['name' => 'left side', 'colPos' => 201],
                    ['name' => 'right side', 'colPos' => 202]
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    ->setIcon('EXT:altaah1package/Resources/Public/Icons/Custom-Icon-Design-Mono-Business-2-Coffee.ico')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'b13-2cols2575-container', // CType
                '25% 75%', // label
                'bootstrap 25 75', // description
                [
                    [
                        ['name' => 'left side', 'colPos' => 201],
                        ['name' => 'right side', 'colPos' => 202]
                    ]
                ] // grid configuration
            )
        )
        // set an optional icon configuration
        ->setIcon('EXT:altaah1package/Resources/Public/Icons/Custom-Icon-Design-Mono-Business-2-Coffee.ico')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'b13-2cols7525-container', // CType
                '75% 25%', // label
                'bootstrap 75 25', // description
                [
                    [
                        ['name' => 'left side', 'colPos' => 201],
                        ['name' => 'right side', 'colPos' => 202]
                    ]
                ] // grid configuration
            )
        )
        // set an optional icon configuration
        ->setIcon('EXT:altaah1package/Resources/Public/Icons/Custom-Icon-Design-Mono-Business-2-Coffee.ico')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'b13-3cols333333-container', // CType
            '33% 33% 33%', // label
            'bootstrap 33 33 33', // description
            [
                [
                    ['name' => 'left side', 'colPos' => 201],
                    ['name' => 'middle side', 'colPos' => 203],
                    ['name' => 'right side', 'colPos' => 202]
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    ->setIcon('EXT:altaah1package/Resources/Public/Icons/Custom-Icon-Design-Mono-Business-2-Coffee.ico')
);

require $_SERVER["DOCUMENT_ROOT"].'/typo3conf/ext/backgroundimage4ce/Configuration/TCA/Overrides/tt_content.php';




















