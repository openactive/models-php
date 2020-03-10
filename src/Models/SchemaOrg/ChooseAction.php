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
            "actionOption" => "actionOption",
            "option" => "option",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of object. The options subject to this action.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Thing
     */
    protected $actionOption;

    /**
     * A sub property of object. The options subject to this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $option;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Thing
     */
    public function getActionOption()
    {
        return $this->actionOption;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Thing $actionOption
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActionOption($actionOption)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $actionOption = self::checkTypes($actionOption, $types);

        $this->actionOption = $actionOption;
    }

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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        );

        $option = self::checkTypes($option, $types);

        $this->option = $option;
    }

}
