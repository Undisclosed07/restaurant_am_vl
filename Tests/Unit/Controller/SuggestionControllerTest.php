<?php
namespace Xx\RestaurantAmVl\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Alban MAYUNGA <albanmayunga01@gmail.com>
 * @author Victor LEFRANCOIS <lefrancois.victor@hotmail.fr>
 */
class SuggestionControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Xx\RestaurantAmVl\Controller\SuggestionController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Xx\RestaurantAmVl\Controller\SuggestionController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

}
