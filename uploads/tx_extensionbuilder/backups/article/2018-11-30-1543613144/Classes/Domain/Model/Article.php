<?php
namespace Article\Article\Domain\Model;

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
 * Article
 */
class Article extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * date
     * 
     * @var \DateTime
     */
    protected $date = null;

    /**
     * articleName
     * 
     * @var string
     */
    protected $articleName = '';

    /**
     * articleDescription
     * 
     * @var string
     */
    protected $articleDescription = '';

    /**
     * articleContent
     * 
     * @var string
     */
    protected $articleContent = '';

    /**
     * articleOptionalFieldOne
     * 
     * @var string
     */
    protected $articleOptionalFieldOne = '';

    /**
     * articleOptionalFieldTwo
     * 
     * @var string
     */
    protected $articleOptionalFieldTwo = '';

    /**
     * articleOptionalFieldThree
     * 
     * @var string
     */
    protected $articleOptionalFieldThree = '';

    /**
     * articleImage
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $articleImage = null;

    /**
     * Returns the date
     * 
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     * 
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Returns the articleName
     * 
     * @return string $articleName
     */
    public function getArticleName()
    {
        return $this->articleName;
    }

    /**
     * Sets the articleName
     * 
     * @param string $articleName
     * @return void
     */
    public function setArticleName($articleName)
    {
        $this->articleName = $articleName;
    }

    /**
     * Returns the articleDescription
     * 
     * @return string $articleDescription
     */
    public function getArticleDescription()
    {
        return $this->articleDescription;
    }

    /**
     * Sets the articleDescription
     * 
     * @param string $articleDescription
     * @return void
     */
    public function setArticleDescription($articleDescription)
    {
        $this->articleDescription = $articleDescription;
    }

    /**
     * Returns the articleContent
     * 
     * @return string $articleContent
     */
    public function getArticleContent()
    {
        return $this->articleContent;
    }

    /**
     * Sets the articleContent
     * 
     * @param string $articleContent
     * @return void
     */
    public function setArticleContent($articleContent)
    {
        $this->articleContent = $articleContent;
    }

    /**
     * Returns the articleOptionalFieldOne
     * 
     * @return string $articleOptionalFieldOne
     */
    public function getArticleOptionalFieldOne()
    {
        return $this->articleOptionalFieldOne;
    }

    /**
     * Sets the articleOptionalFieldOne
     * 
     * @param string $articleOptionalFieldOne
     * @return void
     */
    public function setArticleOptionalFieldOne($articleOptionalFieldOne)
    {
        $this->articleOptionalFieldOne = $articleOptionalFieldOne;
    }

    /**
     * Returns the articleOptionalFieldTwo
     * 
     * @return string $articleOptionalFieldTwo
     */
    public function getArticleOptionalFieldTwo()
    {
        return $this->articleOptionalFieldTwo;
    }

    /**
     * Sets the articleOptionalFieldTwo
     * 
     * @param string $articleOptionalFieldTwo
     * @return void
     */
    public function setArticleOptionalFieldTwo($articleOptionalFieldTwo)
    {
        $this->articleOptionalFieldTwo = $articleOptionalFieldTwo;
    }

    /**
     * Returns the articleOptionalFieldThree
     * 
     * @return string $articleOptionalFieldThree
     */
    public function getArticleOptionalFieldThree()
    {
        return $this->articleOptionalFieldThree;
    }

    /**
     * Sets the articleOptionalFieldThree
     * 
     * @param string $articleOptionalFieldThree
     * @return void
     */
    public function setArticleOptionalFieldThree($articleOptionalFieldThree)
    {
        $this->articleOptionalFieldThree = $articleOptionalFieldThree;
    }

    /**
     * Returns the articleImage
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $articleImage
     */
    public function getArticleImage()
    {
        return $this->articleImage;
    }

    /**
     * Sets the articleImage
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $articleImage
     * @return void
     */
    public function setArticleImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $articleImage)
    {
        $this->articleImage = $articleImage;
    }
}
