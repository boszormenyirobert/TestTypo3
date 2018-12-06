
plugin.tx_article_article {
    view {
        # cat=plugin.tx_article_article/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:article/Resources/Private/Templates/
        # cat=plugin.tx_article_article/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:article/Resources/Private/Partials/
        # cat=plugin.tx_article_article/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:article/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_article_article//a; type=string; label=Default storage PID
        storagePid =
    }
}
