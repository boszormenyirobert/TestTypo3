
plugin.tx_slider_slider {
    view {
        templateRootPaths.0 = EXT:slider/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_slider_slider.view.templateRootPath}
        partialRootPaths.0 = EXT:slider/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_slider_slider.view.partialRootPath}
        layoutRootPaths.0 = EXT:slider/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_slider_slider.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_slider_slider.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

# these classes are only used in auto-generated templates
plugin.tx_slider._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-slider table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-slider table th {
        font-weight:bold;
    }

    .tx-slider table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
