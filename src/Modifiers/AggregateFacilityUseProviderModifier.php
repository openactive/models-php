<?php
/**
 * AggregateFacilityUseProviderModifier
 * 
 * Removes the provider attribute from the aggregateFacilityUse
 * property of an OrderedItem's FacilityUse.
 * 
 * Used to modify the C1/C2/B order output if the provider has
 * been added in during construction of Slot OrderedItems
 * 
 * This typically happens because the Orders feed requires the
 * provider to be present and the C1/C2/B steps require it to
 * be omitted. It depends how your renderer for FacilityUse has
 * been setup
 */

namespace OpenActive\Modifiers;

class AggregateFacilityUseProviderModifier
{
    public function __invoke($class, $key, $value)
    {
        if ($key == 'aggregateFacilityUse' && isset($value['provider'])) {
            unset($value['provider']);
        }

        return $value;
    }
}