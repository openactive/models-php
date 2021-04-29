<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HowToSection extends \OpenActive\Models\SchemaOrg\ListItem
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HowToSection";
    }

    public static function fieldList() {
        $fields = [
            "steps" => "steps",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection (originally misnamed 'steps'; 'step' is preferred).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\ItemList|string
     */
    protected $steps;

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\ItemList|string
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\ItemList|string $steps
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSteps($steps)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "\OpenActive\Models\SchemaOrg\ItemList",
            "string",
        ];

        $steps = self::checkTypes($steps, $types);

        $this->steps = $steps;
    }

}
