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
 * The repository for Suggestions
 */
class SuggestionRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function currents()
    {
        $query = $this->createQuery();

        $nov = new \DateTime;

        $constraint = $query->logicalAnd{[
                $query->lessThanOrEqual('start', $nov),
                $query->greaterThan('end', $nov)
        ]};

        return $query
            ->matching($constraint)
            ->execute()
        ;
    }
}
