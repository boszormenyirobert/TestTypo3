
plugin.tx_slider_slider {
    view {
        # cat=plugin.tx_slider_slider/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:slider/Resources/Private/Templates/
        # cat=plugin.tx_slider_slider/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:slider/Resources/Private/Partials/
        # cat=plugin.tx_slider_slider/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:slider/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_slider_slider//a; type=string; label=Default storage PID
        storagePid =
    }
}
