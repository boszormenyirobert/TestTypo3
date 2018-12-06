<?php
namespace Article\Article\Controller;

/***
 *
 * This file is part of the "TutorialTypo3" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * ArticleController
 */
class ArticleController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * articleRepository
     * 
     * @var \Article\Article\Domain\Repository\ArticleRepository
     * @inject
     */
    protected $articleRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
         $this->articleId = explode(',', $this->settings['datensatz']);
            foreach ($this->articleId as $id){
                $col [] = $this->articleRepository->findByUid($id);
            }
       
     
        $this->view->assign('articles', $col);
    }

    /**
     * action show
     * 
     * @param \Article\Article\Domain\Model\Article $article
     * @return void
     */
    public function showAction(\Article\Article\Domain\Model\Article $article)
    {
        $this->view->assign('article', $article);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     * 
     * @param \Article\Article\Domain\Model\Article $newArticle
     * @return void
     */
    public function createAction(\Article\Article\Domain\Model\Article $newArticle)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->articleRepository->add($newArticle);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Article\Article\Domain\Model\Article $article
     * @ignorevalidation $article
     * @return void
     */
    public function editAction(\Article\Article\Domain\Model\Article $article)
    {
        $this->view->assign('article', $article);
    }

    /**
     * action update
     * 
     * @param \Article\Article\Domain\Model\Article $article
     * @return void
     */
    public function updateAction(\Article\Article\Domain\Model\Article $article)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->articleRepository->update($article);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Article\Article\Domain\Model\Article $article
     * @return void
     */
    public function deleteAction(\Article\Article\Domain\Model\Article $article)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->articleRepository->remove($article);
        $this->redirect('list');
    }
}
