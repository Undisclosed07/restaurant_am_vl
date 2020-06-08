<?php
namespace Xx\RestaurantAmVl\Controller;


/***
 *
 * This file is part of the "Restaurant AM VL" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Alban MAYUNGA <albanmayunga01@gmail.com>, LP DAWIN
 *           Victor LEFRANCOIS <lefrancois.victor@hotmail.fr>
 *
 ***/
/**
 * DishController
 */
class DishController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * dishRepository
     * 
     * @var \Xx\RestaurantAmVl\Domain\Repository\DishRepository
     * @inject
     */
    protected $dishRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $dishes = $this->dishRepository->findAll();
        $this->view->assign('dishes', $dishes);
    }

    /**
     * action show
     * 
     * @param \Xx\RestaurantAmVl\Domain\Model\Dish $dish
     * @return void
     */
    public function showAction(\Xx\RestaurantAmVl\Domain\Model\Dish $dish)
    {
        $this->view->assign('dish', $dish);
    }

    /**
     * action search
     * 
     * @return void
     */
    public function searchAction()
    {
    }

    /**
     * action focus
     * 
     * @return void
     */
    public function focusAction()
    {
    }
}
