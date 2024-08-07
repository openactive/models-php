<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PlayGameAction extends \OpenActive\Models\SchemaOrg\ConsumeAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PlayGameAction";
    }

    public static function fieldList() {
        $fields = [
            "gameAvailabilityType" => "gameAvailabilityType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates the availability type of the game content associated with this action, such as whether it is a full version or a demo.
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\GameAvailabilityEnumeration|null
     */
    protected $gameAvailabilityType;

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\GameAvailabilityEnumeration|null
     */
    public function getGameAvailabilityType()
    {
        return $this->gameAvailabilityType;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\GameAvailabilityEnumeration|null $gameAvailabilityType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGameAvailabilityType($gameAvailabilityType)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\GameAvailabilityEnumeration",
            "null",
        ];

        $gameAvailabilityType = self::checkTypes($gameAvailabilityType, $types);

        $this->gameAvailabilityType = $gameAvailabilityType;
    }

}
