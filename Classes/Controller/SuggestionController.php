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
 * SuggestionController
 */
class SuggestionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * suggestionRepository
     * 
     * @var \Xx\RestaurantAmVl\Domain\Repository\SuggestionRepository
     * @inject
     */
    protected $suggestionRepository = null;

    /**
     * action current
     * 
     * @return void
     */
    public function currentAction()
    {
        $this->view->assign('suggestions', $this->suggestionRepository->currents());
    }

    /**
     * action incoming
     * 
     * @return void
     */
    public function incomingAction()
    {
    }
}
