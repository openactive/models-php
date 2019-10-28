<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Action](https://schema.org/Action), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Action extends \OpenActive\Models\SchemaOrg\Action
{
    /**
     * The name of the action
     *
     * ```json
     * "name": "Book"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * A definition of the target of the action.
     *
     * ```json
     * "target": {
     *   "encodingType": "application/vnd.openactive.v1.0+json",
     *   "httpMethod": "POST",
     *   "type": "EntryPoint",
     *   "url": "https://example.com/orders"
     * }
     * ```
     *
     * @var EntryPoint
     */
    protected $target;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = array(
            "string",
        );

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return EntryPoint
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param EntryPoint $target
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTarget($target)
    {
        $types = array(
            "EntryPoint",
        );

        $target = self::checkTypes($target, $types);

        $this->target = $target;
    }

}
