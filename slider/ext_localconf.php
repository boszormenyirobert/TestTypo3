<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Slider.Slider',
            'Slider',
            [
                'Slider' => 'list'
            ],
            // non-cacheable actions
            [
                'Slider' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    slider {
                        iconIdentifier = slider-plugin-slider
                        title = LLL:EXT:slider/Resources/Private/Language/locallang_db.xlf:tx_slider_slider.name
                        description = LLL:EXT:slider/Resources/Private/Language/locallang_db.xlf:tx_slider_slider.description
                        tt_content_defValues {
                            CType = list
                            list_type = slider_slider
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'slider-plugin-slider',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:slider/Resources/Public/Icons/user_plugin_slider.svg']
			);
		
    }
);
