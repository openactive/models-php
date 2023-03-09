<?php

namespace OpenActive\Models\Playfinder;

use OpenActive\Models\OA\Offer;
use OpenActive\Models\OA\PriceSpecification;
use OpenActive\Models\SchemaOrg\Product;

class AddOn extends Product
{
    /**
     * @var PriceSpecification|null
     */
    private ?PriceSpecification $priceSpecification = null;

    /**
     * @var Offer[]|string[]
     */
    protected $offers;

    public static function getType()
    {
        return "playfinder:AddOn";
    }

    public static function fieldList()
    {
        $fields = [
            'priceSpecification' => 'priceSpecification',
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * @return PriceSpecification|null
     */
    public function getPriceSpecification(): ?PriceSpecification
    {
        return $this->priceSpecification;
    }

    /**
     * @param PriceSpecification|null $priceSpecification
     */
    public function setPriceSpecification(?PriceSpecification $priceSpecification): void
    {
        $this->priceSpecification = $priceSpecification;
    }

    /**
     * @return  Offer[]|string[]
     */
    public function getOffers(): array
    {
        return $this->offers;
    }

    /**
     * @param Offer[]|string[] $offers
     */
    public function setOffers($offers): void
    {
        $this->offers = $offers;
    }
}
