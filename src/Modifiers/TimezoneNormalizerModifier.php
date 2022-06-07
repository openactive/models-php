<?php

namespace OpenActive\Modifiers;

use OpenActive\Helpers\DateTime as DateTimeHelper;

class TimezoneNormalizerModifier
{
    /** @var string */
    private $timezone;

    /**
     * @var string $timezone
     */
    public function __construct($timezone)
    {
        $this->timezone = $timezone;
    }

    public function __invoke($class, $key, $value, $object)
    {
        if (!in_array($key, ['startDate', 'endDate'])) {
            return $value;
        }
        $tzDate = new \DateTime($value);
        $tzDate->setTimezone(new \DateTimeZone($this->timezone));
        return DateTimeHelper::iso8601($tzDate);
    }
}
