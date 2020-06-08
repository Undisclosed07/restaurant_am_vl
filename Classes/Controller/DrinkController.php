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
 * DrinkController
 */
class DrinkController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * drinkRepository
     * 
     * @var \Xx\RestaurantAmVl\Domain\Repository\DrinkRepository
     * @inject
     */
    protected $drinkRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $drinks = $this->drinkRepository->findAll();
        $this->view->assign('drinks', $drinks);
    }
}
