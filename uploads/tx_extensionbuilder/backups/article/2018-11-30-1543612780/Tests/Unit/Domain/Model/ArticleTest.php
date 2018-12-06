<?php
namespace Article\Article\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ArticleTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Article\Article\Domain\Model\Article
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Article\Article\Domain\Model\Article();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'date',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getArticleNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getArticleName()
        );
    }

    /**
     * @test
     */
    public function setArticleNameForStringSetsArticleName()
    {
        $this->subject->setArticleName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'articleName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getArticleDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getArticleDescription()
        );
    }

    /**
     * @test
     */
    public function setArticleDescriptionForStringSetsArticleDescription()
    {
        $this->subject->setArticleDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'articleDescription',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getArticleContentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getArticleContent()
        );
    }

    /**
     * @test
     */
    public function setArticleContentForStringSetsArticleContent()
    {
        $this->subject->setArticleContent('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'articleContent',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getArticleOptionalFieldOneReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getArticleOptionalFieldOne()
        );
    }

    /**
     * @test
     */
    public function setArticleOptionalFieldOneForStringSetsArticleOptionalFieldOne()
    {
        $this->subject->setArticleOptionalFieldOne('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'articleOptionalFieldOne',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getArticleOptionalFieldTwoReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getArticleOptionalFieldTwo()
        );
    }

    /**
     * @test
     */
    public function setArticleOptionalFieldTwoForStringSetsArticleOptionalFieldTwo()
    {
        $this->subject->setArticleOptionalFieldTwo('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'articleOptionalFieldTwo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getArticleOptionalFieldThreeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getArticleOptionalFieldThree()
        );
    }

    /**
     * @test
     */
    public function setArticleOptionalFieldThreeForStringSetsArticleOptionalFieldThree()
    {
        $this->subject->setArticleOptionalFieldThree('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'articleOptionalFieldThree',
            $this->subject
        );
    }
}
