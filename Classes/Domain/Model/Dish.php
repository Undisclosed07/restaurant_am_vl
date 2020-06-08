<?php
namespace Xx\RestaurantAmVl\Domain\Model;


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
 * Plat
 */
class Dish extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Nom
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * Description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * Photo
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $photo = null;

    /**
     * Type
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $type = 0;

    /**
     * Prix
     * 
     * @var float
     */
    protected $price = 0.0;

    /**
     * Réduction
     * 
     * @var float
     */
    protected $discount = 0.0;

    /**
     * Contient des allergènes
     * 
     * @var bool
     */
    protected $allergens = false;

    /**
     * Contient des produits surgelés
     * 
     * @var bool
     */
    protected $frozens = false;

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the photo
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the photo
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     * @return void
     */
    public function setPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo)
    {
        $this->photo = $photo;
    }

    /**
     * Returns the type
     * 
     * @return int $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     * 
     * @param int $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Returns the price
     * 
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     * 
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Returns the discount
     * 
     * @return float $discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets the discount
     * 
     * @param float $discount
     * @return void
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * Returns the allergens
     * 
     * @return bool $allergens
     */
    public function getAllergens()
    {
        return $this->allergens;
    }

    /**
     * Sets the allergens
     * 
     * @param bool $allergens
     * @return void
     */
    public function setAllergens($allergens)
    {
        $this->allergens = $allergens;
    }

    /**
     * Returns the boolean state of allergens
     * 
     * @return bool
     */
    public function isAllergens()
    {
        return $this->allergens;
    }

    /**
     * Returns the frozens
     * 
     * @return bool $frozens
     */
    public function getFrozens()
    {
        return $this->frozens;
    }

    /**
     * Sets the frozens
     * 
     * @param bool $frozens
     * @return void
     */
    public function setFrozens($frozens)
    {
        $this->frozens = $frozens;
    }

    /**
     * Returns the boolean state of frozens
     * 
     * @return bool
     */
    public function isFrozens()
    {
        return $this->frozens;
    }
}
