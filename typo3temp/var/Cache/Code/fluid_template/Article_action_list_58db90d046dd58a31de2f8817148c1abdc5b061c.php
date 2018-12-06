<?php

class Article_action_list_58db90d046dd58a31de2f8817148c1abdc5b061c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
    2 => NULL,
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
		<div id="welcome">
			      <div class="title">
			        <h2>Nos akkor csapjunk a dolgok közepébe</h2>
			        <span class="byline">Nyílván azért vagy itt, mert érdekel egy-két dolog, ami programozáshoz kapcsolódik.</span>
			      </div>
			      <p>Ha így van, és még az alapokon <strong>localhost installálása</strong>,még nem vagy túl,<a href="http://templated.co" rel="nofollow">katt ide</a>.Amennyiben már gyönyörűen fut a localhostodon a szerver, de esetleg szeretnéd, ha nem a default mappából kéne dolgoznod, akkor viszont <a href="http://fotogrph.com/">katt ide.</a>. Viszont valamiért erre az oldalra tévedtél, úgyhogy feltételezem, hogy az előző részeken már túl vagy, és szeretnéd, ha szép lenne a localhostos url-ed is.</p>
			      <ul class="actions">
			        <li><a href="#" class="button">Nos, akkor íme</a></li>
			      </ul>
			    </div>

			    <div id="featured">
			      <div class="title">
			        <h2>Windows 10 - WAMP szerver - Localhost - Szép url - </h2>
			        <span class="byline">Két file módosítás: httpd-vhosts.conf && hosts</span>
			        <p>Maximum 5 perc.</p>
			      </div>
			    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$array3 = array (
);return $renderingContext->getVariableProvider()->getByPath('articles', $array3);
};
$arguments1 = array();
$arguments1['title'] = NULL;
$arguments1['maxDepth'] = 8;
$arguments1['plainText'] = false;
$arguments1['ansiColors'] = false;
$arguments1['inline'] = false;
$arguments1['blacklistedClassNames'] = NULL;
$arguments1['blacklistedPropertyNames'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
			        <ul class="style1">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
						        <li class="first">
						          <p class="date"><a href="#">
						         
						         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$array10 = array (
);return $renderingContext->getVariableProvider()->getByPath('articles.date', $array10);
};
$arguments8 = array();
$arguments8['date'] = NULL;
$arguments8['format'] = '';
$arguments8['base'] = NULL;
$arguments8['format'] = 'd.m.Y';
$renderChildrenClosure9 = ($arguments8['date'] !== null) ? function() use ($arguments8) { return $arguments8['date']; } : $renderChildrenClosure9;
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output7 .= '</a></p>
						          <h3>';
$array11 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('articles.articleName', $array11)]);

$output7 .= '</h3>

						          <p> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$array14 = array (
);return $renderingContext->getVariableProvider()->getByPath('articles.articleDescription', $array14);
};
$arguments12 = array();
$arguments12['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output7 .= '</p>
						          <div class="showMore"><img src="https://image.flaticon.com/icons/svg/61/61028.svg"></div>
						      	  <div class="articleContent displayNone">
						          ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$array17 = array (
);return $renderingContext->getVariableProvider()->getByPath('articles.articleContent', $array17);
};
$arguments15 = array();
$arguments15['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output7 .= '
						      </div>
						        </li>
						';
return $output7;
};
$arguments4 = array();
$arguments4['each'] = NULL;
$arguments4['as'] = NULL;
$arguments4['key'] = NULL;
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$array6 = array (
);$arguments4['each'] = $renderingContext->getVariableProvider()->getByPath('articles', $array6);
$arguments4['as'] = 'articles';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
 					</ul>
			    </div>

	';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output18 = '';

$output18 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['name'] = NULL;
$arguments19['name'] = 'Default';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output18 .= '


	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
		<div id="welcome">
			      <div class="title">
			        <h2>Nos akkor csapjunk a dolgok közepébe</h2>
			        <span class="byline">Nyílván azért vagy itt, mert érdekel egy-két dolog, ami programozáshoz kapcsolódik.</span>
			      </div>
			      <p>Ha így van, és még az alapokon <strong>localhost installálása</strong>,még nem vagy túl,<a href="http://templated.co" rel="nofollow">katt ide</a>.Amennyiben már gyönyörűen fut a localhostodon a szerver, de esetleg szeretnéd, ha nem a default mappából kéne dolgoznod, akkor viszont <a href="http://fotogrph.com/">katt ide.</a>. Viszont valamiért erre az oldalra tévedtél, úgyhogy feltételezem, hogy az előző részeken már túl vagy, és szeretnéd, ha szép lenne a localhostos url-ed is.</p>
			      <ul class="actions">
			        <li><a href="#" class="button">Nos, akkor íme</a></li>
			      </ul>
			    </div>

			    <div id="featured">
			      <div class="title">
			        <h2>Windows 10 - WAMP szerver - Localhost - Szép url - </h2>
			        <span class="byline">Két file módosítás: httpd-vhosts.conf && hosts</span>
			        <p>Maximum 5 perc.</p>
			      </div>
			    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$array26 = array (
);return $renderingContext->getVariableProvider()->getByPath('articles', $array26);
};
$arguments24 = array();
$arguments24['title'] = NULL;
$arguments24['maxDepth'] = 8;
$arguments24['plainText'] = false;
$arguments24['ansiColors'] = false;
$arguments24['inline'] = false;
$arguments24['blacklistedClassNames'] = NULL;
$arguments24['blacklistedPropertyNames'] = NULL;

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
			        <ul class="style1">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
						        <li class="first">
						          <p class="date"><a href="#">
						         
						         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$array33 = array (
);return $renderingContext->getVariableProvider()->getByPath('articles.date', $array33);
};
$arguments31 = array();
$arguments31['date'] = NULL;
$arguments31['format'] = '';
$arguments31['base'] = NULL;
$arguments31['format'] = 'd.m.Y';
$renderChildrenClosure32 = ($arguments31['date'] !== null) ? function() use ($arguments31) { return $arguments31['date']; } : $renderChildrenClosure32;
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output30 .= '</a></p>
						          <h3>';
$array34 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('articles.articleName', $array34)]);

$output30 .= '</h3>

						          <p> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$array37 = array (
);return $renderingContext->getVariableProvider()->getByPath('articles.articleDescription', $array37);
};
$arguments35 = array();
$arguments35['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output30 .= '</p>
						          <div class="showMore"><img src="https://image.flaticon.com/icons/svg/61/61028.svg"></div>
						      	  <div class="articleContent displayNone">
						          ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$array40 = array (
);return $renderingContext->getVariableProvider()->getByPath('articles.articleContent', $array40);
};
$arguments38 = array();
$arguments38['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output30 .= '
						      </div>
						        </li>
						';
return $output30;
};
$arguments27 = array();
$arguments27['each'] = NULL;
$arguments27['as'] = NULL;
$arguments27['key'] = NULL;
$arguments27['reverse'] = false;
$arguments27['iteration'] = NULL;
$array29 = array (
);$arguments27['each'] = $renderingContext->getVariableProvider()->getByPath('articles', $array29);
$arguments27['as'] = 'articles';

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output23 .= '
 					</ul>
			    </div>

	';
return $output23;
};
$arguments21 = array();
$arguments21['name'] = NULL;
$arguments21['name'] = 'content';

$output18 .= NULL;

$output18 .= '
';

return $output18;
}


}
#