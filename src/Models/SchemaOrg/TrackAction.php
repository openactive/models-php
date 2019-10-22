<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TrackAction extends \OpenActive\Models\SchemaOrg\FindAction
{
    /**
     * A sub property of instrument. The method of delivery.
     *
     *
     * @var Schema.NET.DeliveryMethod|null
     */
    protected $deliveryMethod;

    /**
     * @return Schema.NET.DeliveryMethod|null
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    /**
     * @param Schema.NET.DeliveryMethod|null $deliveryMethod
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setDeliveryMethod($deliveryMethod)
    {
        $types = array(
            "Schema.NET.DeliveryMethod",
            "null",
        );

        $deliveryMethod = self::checkTypes($deliveryMethod, $types);

        $this->deliveryMethod = $deliveryMethod;
    }

}
