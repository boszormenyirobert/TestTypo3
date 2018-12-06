<?php
namespace Article\Article\Tests\Unit\Controller;

/**
 * Test case.
 */
class ArticleControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Article\Article\Controller\ArticleController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Article\Article\Controller\ArticleController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllArticlesFromRepositoryAndAssignsThemToView()
    {

        $allArticles = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $articleRepository = $this->getMockBuilder(\Article\Article\Domain\Repository\ArticleRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $articleRepository->expects(self::once())->method('findAll')->will(self::returnValue($allArticles));
        $this->inject($this->subject, 'articleRepository', $articleRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('articles', $allArticles);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenArticleToView()
    {
        $article = new \Article\Article\Domain\Model\Article();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('article', $article);

        $this->subject->showAction($article);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenArticleToArticleRepository()
    {
        $article = new \Article\Article\Domain\Model\Article();

        $articleRepository = $this->getMockBuilder(\Article\Article\Domain\Repository\ArticleRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $articleRepository->expects(self::once())->method('add')->with($article);
        $this->inject($this->subject, 'articleRepository', $articleRepository);

        $this->subject->createAction($article);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenArticleToView()
    {
        $article = new \Article\Article\Domain\Model\Article();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('article', $article);

        $this->subject->editAction($article);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenArticleInArticleRepository()
    {
        $article = new \Article\Article\Domain\Model\Article();

        $articleRepository = $this->getMockBuilder(\Article\Article\Domain\Repository\ArticleRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $articleRepository->expects(self::once())->method('update')->with($article);
        $this->inject($this->subject, 'articleRepository', $articleRepository);

        $this->subject->updateAction($article);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenArticleFromArticleRepository()
    {
        $article = new \Article\Article\Domain\Model\Article();

        $articleRepository = $this->getMockBuilder(\Article\Article\Domain\Repository\ArticleRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $articleRepository->expects(self::once())->method('remove')->with($article);
        $this->inject($this->subject, 'articleRepository', $articleRepository);

        $this->subject->deleteAction($article);
    }
}
