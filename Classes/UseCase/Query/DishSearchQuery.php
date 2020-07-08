<?php

namespace Xx\RestaurantAmVl\UseCase\Query;

class DishSearchQuery {

   /**
    * @var string
    */
    private $search;

   /**
    * @var int
    */
    private $type;

   /**
    * @var float
    */
    private $minPrice;

   /**
    * @var float
    */
    private $maxPrice;

   /**
    * @var bool
    */
    private $allergens = false;

   /**
    * @var bool
    */
    private $frozens = false;

   /**
    * @return string
    */
    public function getSearch() : ?string
    {
        return $this->$search;
    }

   /**
    * @param string $search
    * 
    * @return DishSearchQuery
    */
    public function setSearch(?string $search)
    {
        $this->$search = $search;
        return $this;
    }

    public function getType() : ?int
    {
        return $this->$type;
    }

    public function setType(?int $type)
    {
        $this->$type = $type;
        return $this;
    }

    public function getMinPrice() : ?float
    {
        return $this->$minPrice;
    }

    public function setMinPrice(?float $minPrice)
    {
        $this->$minPrice = $minPrice;
        return $this;
    }

    public function getMaxPrice() : ?float
    {
        return $this->$maxPrice;
    }

    public function setMaxPrice(?float $maxPrice)
    {
        $this->$maxPrice = $maxPrice;
        return $this;
    }

    public function getAllergens() : ?bool
    {
        return $this->$allergens;
    }

    public function setAllergens(?bool $allergens)
    {
        $this->$allergens = $allergens;
        return $this;
    }

    public function getFrozens() : ?bool
    {
        return $this->$frozens;
    }

    public function setFrozens(?bool $frozens)
    {
        $this->$frozens = $frozens;
        return $this;
    }

}