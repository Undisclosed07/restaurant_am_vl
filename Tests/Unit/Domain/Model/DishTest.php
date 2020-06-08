<?php
namespace Xx\RestaurantAmVl\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Alban MAYUNGA <albanmayunga01@gmail.com>
 * @author Victor LEFRANCOIS <lefrancois.victor@hotmail.fr>
 */
class DishTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Xx\RestaurantAmVl\Domain\Model\Dish
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Xx\RestaurantAmVl\Domain\Model\Dish();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhotoReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getPhoto()
        );
    }

    /**
     * @test
     */
    public function setPhotoForFileReferenceSetsPhoto()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setPhoto($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'photo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTypeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getType()
        );
    }

    /**
     * @test
     */
    public function setTypeForIntSetsType()
    {
        $this->subject->setType(12);

        self::assertAttributeEquals(
            12,
            'type',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPriceReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPrice()
        );
    }

    /**
     * @test
     */
    public function setPriceForFloatSetsPrice()
    {
        $this->subject->setPrice(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'price',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getDiscountReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getDiscount()
        );
    }

    /**
     * @test
     */
    public function setDiscountForFloatSetsDiscount()
    {
        $this->subject->setDiscount(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'discount',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getAllergensReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAllergens()
        );
    }

    /**
     * @test
     */
    public function setAllergensForBoolSetsAllergens()
    {
        $this->subject->setAllergens(true);

        self::assertAttributeEquals(
            true,
            'allergens',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFrozensReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getFrozens()
        );
    }

    /**
     * @test
     */
    public function setFrozensForBoolSetsFrozens()
    {
        $this->subject->setFrozens(true);

        self::assertAttributeEquals(
            true,
            'frozens',
            $this->subject
        );
    }
}
