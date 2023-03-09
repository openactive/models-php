<?php

namespace OpenActive\Models\Playfinder;

class IndividualFacilityUse extends \OpenActive\Models\OA\IndividualFacilityUse
{
    /**
     * @var AddOn[] $addOns
     */
    private array $addOns = [];

    public static function getType()
    {
        return "playfinder:IndividualFacilityUse";
    }

    public static function fieldList() {
        $fields = [
            "addOns" => "beta:addOns",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * @return AddOn[]
     */
    public function getAddOns(): array
    {
        return $this->addOns;
    }

    /**
     * @var AddOn[] $addOns
     */
    public function setAddOns(array $addOns): void
    {
        $this->addOns = $addOns;
    }
}
