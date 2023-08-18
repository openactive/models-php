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
     * @var string|\OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $steps;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\CreativeWork $steps
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSteps($steps)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\ItemList",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $steps = self::checkTypes($steps, $types);

        $this->steps = $steps;
    }

}
