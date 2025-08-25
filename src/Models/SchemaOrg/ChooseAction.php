<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ChooseAction extends \OpenActive\Models\SchemaOrg\AssessAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ChooseAction";
    }

    public static function fieldList() {
        $fields = [
            "option" => "option",
            "actionOption" => "actionOption",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of object. The options subject to this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $option;

    /**
     * A sub property of object. The options subject to this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $actionOption;

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $option
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOption($option)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $option = self::checkTypes($option, $types);

        $this->option = $option;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getActionOption()
    {
        return $this->actionOption;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $actionOption
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActionOption($actionOption)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $actionOption = self::checkTypes($actionOption, $types);

        $this->actionOption = $actionOption;
    }

}
