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
 * MenuController
 */
class MenuController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * menuRepository
     * 
     * @var \Xx\RestaurantAmVl\Domain\Repository\MenuRepository
     * @inject
     */
    protected $menuRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $menus = $this->menuRepository->findAll();
        $this->view->assign('menus', $menus);
    }

    /**
     * action show
     * 
     * @param \Xx\RestaurantAmVl\Domain\Model\Menu $menu
     * @return void
     */
    public function showAction(\Xx\RestaurantAmVl\Domain\Model\Menu $menu)
    {
        $this->view->assign('menu', $menu);
    }
}
