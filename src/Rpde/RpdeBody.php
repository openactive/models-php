<?php

namespace OpenActive\Rpde;

class RpdeBody extends BaseModel
{
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
