<?php

class partial_Header_headerContent_1911a807005efb5a106cdefa938b03db15cd5f74 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Tutorial: Magyarul - PC - HTML - CSS - JQUERY - TYPO3</title>
<meta name="generator" content="TYPO3 CMS">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="fileadmin/sitedesign/Resources/CSS/default.css">
<link rel="stylesheet" href="fileadmin/sitedesign/Resources/CSS/fonts.css">
<script>
$(document).ready(function(){
    $(".showMore").click(function(){
        $(".articleContent").toggleClass("displayNone");
    });
});
</script> 
</head>



';
}


}
#