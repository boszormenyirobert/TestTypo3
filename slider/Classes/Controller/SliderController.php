<?php
namespace Slider\Slider\Controller;

/***
 *
 * This file is part of the "Slider" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * SliderController
 */
class SliderController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * sliderRepository
     *
     * @var \Slider\Slider\Domain\Repository\SliderRepository
     * @inject
     */
    protected $sliderRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $itemCol=(explode(',',$this->settings['imgcollection']));
            foreach($itemCol as $item){
                $collection[]=$this->sliderRepository->findByUid($item);
            }
       
        $this->view->assign('imgCollection', $collection);
    }
}
