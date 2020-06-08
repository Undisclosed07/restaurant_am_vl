<?php
namespace Xx\RestaurantAmVl\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Alban MAYUNGA <albanmayunga01@gmail.com>
 * @author Victor LEFRANCOIS <lefrancois.victor@hotmail.fr>
 */
class DishControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Xx\RestaurantAmVl\Controller\DishController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Xx\RestaurantAmVl\Controller\DishController::class)
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
    public function listActionFetchesAllDishesFromRepositoryAndAssignsThemToView()
    {

        $allDishes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $dishRepository = $this->getMockBuilder(\Xx\RestaurantAmVl\Domain\Repository\DishRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $dishRepository->expects(self::once())->method('findAll')->will(self::returnValue($allDishes));
        $this->inject($this->subject, 'dishRepository', $dishRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('dishes', $allDishes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenDishToView()
    {
        $dish = new \Xx\RestaurantAmVl\Domain\Model\Dish();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('dish', $dish);

        $this->subject->showAction($dish);
    }
}
