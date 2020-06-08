<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Xx.RestaurantAmVl',
            'Pi1',
            'Les menus'
        );

        $pluginSignature = str_replace('_', '', 'restaurant_am_vl') . '_pi1';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:restaurant_am_vl/Configuration/FlexForms/flexform_pi1.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Xx.RestaurantAmVl',
            'Pi2',
            'Les plats'
        );

        $pluginSignature = str_replace('_', '', 'restaurant_am_vl') . '_pi2';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:restaurant_am_vl/Configuration/FlexForms/flexform_pi2.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Xx.RestaurantAmVl',
            'Pi3',
            'Les boissons'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Xx.RestaurantAmVl',
            'Pi4',
            'Les suggestions'
        );

        $pluginSignature = str_replace('_', '', 'restaurant_am_vl') . '_pi4';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:restaurant_am_vl/Configuration/FlexForms/flexform_pi4.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('restaurant_am_vl', 'Configuration/TypoScript', 'Restaurant AM VL');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_restaurantamvl_domain_model_menu', 'EXT:restaurant_am_vl/Resources/Private/Language/locallang_csh_tx_restaurantamvl_domain_model_menu.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_restaurantamvl_domain_model_menu');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_restaurantamvl_domain_model_dish', 'EXT:restaurant_am_vl/Resources/Private/Language/locallang_csh_tx_restaurantamvl_domain_model_dish.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_restaurantamvl_domain_model_dish');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_restaurantamvl_domain_model_drink', 'EXT:restaurant_am_vl/Resources/Private/Language/locallang_csh_tx_restaurantamvl_domain_model_drink.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_restaurantamvl_domain_model_drink');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_restaurantamvl_domain_model_category', 'EXT:restaurant_am_vl/Resources/Private/Language/locallang_csh_tx_restaurantamvl_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_restaurantamvl_domain_model_category');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_restaurantamvl_domain_model_suggestion', 'EXT:restaurant_am_vl/Resources/Private/Language/locallang_csh_tx_restaurantamvl_domain_model_suggestion.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_restaurantamvl_domain_model_suggestion');

    }
);
