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
     * @param \Xx\RestaurantAmVl\Domain\Repository\DishSearchQuery $search
     * 
     * @return void
     */
    public function listAction(\Xx\RestaurantAmVl\Domain\Repository\DishSearchQuery $search = null)
    {
        $dishes = $this->dishRepository->findAll();
        $this->view->assignMultiple([
            'dishes' => $dishes,
            'search' =>$search
        ]);
    }

    /**
     * action show
     * 
     * @param \Xx\RestaurantAmVl\Domain\Model\Dish $dish
     * @return void
     */
    public function showAction($dish)
    {
        //tx_restaurant_am_vl_pi2(dish)=2
        $this->view->assign('dish', $dish);
    }

    /**
     * action search
     * @param \Xx\RestaurantAmVl\Domain\Repository\DishSearchQuery $search
     * 
     * @return void
     */
    public function searchAction(\Xx\RestaurantAmVl\Domain\Repository\DishSearchQuery $search)
    {
        $this->view->assignMultiple([
            'dishes' => $this->dishRepository->search($search),
            'search' => $search
        ]);
    }

    /**
     * action focus
     * 
     * @return void
     */
    public function focusAction()
    {
        $uids = \array_map('intval', \explode(',', $this->settings['focusedDishes']));
        $this->view->assign('dishes', $this->dishRepository->findFocuses($uids));
    }
}
