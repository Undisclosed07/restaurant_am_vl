<?php
namespace Xx\RestaurantAmVl\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Alban MAYUNGA <albanmayunga01@gmail.com>
 * @author Victor LEFRANCOIS <lefrancois.victor@hotmail.fr>
 */
class DrinkControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Xx\RestaurantAmVl\Controller\DrinkController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Xx\RestaurantAmVl\Controller\DrinkController::class)
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
    public function listActionFetchesAllDrinksFromRepositoryAndAssignsThemToView()
    {

        $allDrinks = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $drinkRepository = $this->getMockBuilder(\Xx\RestaurantAmVl\Domain\Repository\DrinkRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $drinkRepository->expects(self::once())->method('findAll')->will(self::returnValue($allDrinks));
        $this->inject($this->subject, 'drinkRepository', $drinkRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('drinks', $allDrinks);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
