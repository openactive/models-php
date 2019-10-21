<?php

namespace OpenActive\Rpde;

use OpenActive\BaseModel;
use OpenActive\Contracts\SerializerInterface;
use OpenActive\Contracts\TypeCheckerInterface;
use OpenActive\TypeChecker;

class RpdeBody implements SerializerInterface, TypeCheckerInterface
{
    use TypeChecker;

    /**
     * The default value for the license.
     *
     * @var string
     */
    protected static $default_license = "https://creativecommons.org/licenses/by/4.0/";

    /**
     * @var string
     */
    protected $next;

    /**
     * @var RpdeItem[]
     */
    protected $items;

    /**
     * @var string
     */
    protected $license;

    /**
     * Create a new RPDE body instance.
     *
     * @param array $data
     * @return void
     */
    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            // Make sure setter is cased properly
            $methodName = "set" . Str::pascal($key);

            if(method_exists($this, $methodName) === TRUE) {
                $this->$methodName($value);
            }
        }


    }
    /**
     * @return string
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @param string
     * @return void
     */
    public function setNext($next)
    {
        $types = array(
            "string",
        );

        $next = self::checkTypes($next, $types);

        $this->next = $next;
    }

    /**
     * @return RpdeItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param RpdeItem[]
     * @return void
     */
    public function setItems($items)
    {
        $types = array(
            "RpdeItem[]",
        );

        $items = self::checkTypes($items, $types);

        $this->items = $items;
    }

    /**
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param string
     * @return void
     */
    public function setLicense($license)
    {
        $types = array(
            "string",
        );

        $license = self::checkTypes($license, $types);

        $this->license = $license;
    }
}
