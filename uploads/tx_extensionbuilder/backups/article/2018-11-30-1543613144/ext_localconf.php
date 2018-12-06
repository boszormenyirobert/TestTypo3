<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Article.Article',
            'Article',
            [
                'Article' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Article' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    article {
                        iconIdentifier = article-plugin-article
                        title = LLL:EXT:article/Resources/Private/Language/locallang_db.xlf:tx_article_article.name
                        description = LLL:EXT:article/Resources/Private/Language/locallang_db.xlf:tx_article_article.description
                        tt_content_defValues {
                            CType = list
                            list_type = article_article
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'article-plugin-article',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:article/Resources/Public/Icons/user_plugin_article.svg']
			);
		
    }
);
