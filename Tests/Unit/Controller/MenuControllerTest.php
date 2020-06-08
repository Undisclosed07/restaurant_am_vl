<?php
namespace Xx\RestaurantAmVl\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Alban MAYUNGA <albanmayunga01@gmail.com>
 * @author Victor LEFRANCOIS <lefrancois.victor@hotmail.fr>
 */
class MenuControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Xx\RestaurantAmVl\Controller\MenuController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Xx\RestaurantAmVl\Controller\MenuController::class)
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
    public function listActionFetchesAllMenusFromRepositoryAndAssignsThemToView()
    {

        $allMenus = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $menuRepository = $this->getMockBuilder(\Xx\RestaurantAmVl\Domain\Repository\MenuRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $menuRepository->expects(self::once())->method('findAll')->will(self::returnValue($allMenus));
        $this->inject($this->subject, 'menuRepository', $menuRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('menus', $allMenus);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenMenuToView()
    {
        $menu = new \Xx\RestaurantAmVl\Domain\Model\Menu();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('menu', $menu);

        $this->subject->showAction($menu);
    }
}
