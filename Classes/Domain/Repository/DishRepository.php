<?php
namespace Xx\RestaurantAmVl\Domain\Repository;


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
 * The repository for Dishes
 */
class DishRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @var array
     */
    protected $defaultOrderings = ['sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING];

    public function findFocuses($uids)
    {
        $query = $this->createQuery();
        return $query->matching($query->in('uid', $uids))->execute();
    }

    public function search(DishSearchQuery $search)
    {
        $query = $this->createQuery();
        $constraints = [];

        if($search->getSearch() !== null){
            $constraints = $query->like('name', $search->getSearch());
        }

        if($search->getType()){
            $constraints[] = $query->equals('type', $search->getType());
        }

        if(count($constraints)){
            $query->matching($query->logicalAnd($constraints));
        }

        return $query->execute();
    }
}
