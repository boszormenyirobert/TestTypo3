<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Article.Article',
            'Article',
            'TutorialTypo3'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('article', 'Configuration/TypoScript', 'TutorialTypo3');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_article_domain_model_article', 'EXT:article/Resources/Private/Language/locallang_csh_tx_article_domain_model_article.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_article_domain_model_article');

    }
);
