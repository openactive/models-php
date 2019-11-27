<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * The day of the week, e.g. used to specify to which day the opening hours of an OpeningHoursSpecification refer.<br/><br/>
 * 
 * Originally, URLs from <a href="http://purl.org/goodrelations/v1">GoodRelations</a> were used (for <a class="localLink" href="https://schema.org/Monday">Monday</a>, <a class="localLink" href="https://schema.org/Tuesday">Tuesday</a>, <a class="localLink" href="https://schema.org/Wednesday">Wednesday</a>, <a class="localLink" href="https://schema.org/Thursday">Thursday</a>, <a class="localLink" href="https://schema.org/Friday">Friday</a>, <a class="localLink" href="https://schema.org/Saturday">Saturday</a>, <a class="localLink" href="https://schema.org/Sunday">Sunday</a> plus a special entry for <a class="localLink" href="https://schema.org/PublicHolidays">PublicHolidays</a>); these have now been integrated directly into schema.org.
 *
 */
class DayOfWeek
{
    const Wednesday = \OpenActive\Enums\SchemaOrg\DayOfWeek\Wednesday::class;
    const Sunday = \OpenActive\Enums\SchemaOrg\DayOfWeek\Sunday::class;
    const PublicHolidays = \OpenActive\Enums\SchemaOrg\DayOfWeek\PublicHolidays::class;
    const Monday = \OpenActive\Enums\SchemaOrg\DayOfWeek\Monday::class;
    const Friday = \OpenActive\Enums\SchemaOrg\DayOfWeek\Friday::class;
    const Tuesday = \OpenActive\Enums\SchemaOrg\DayOfWeek\Tuesday::class;
    const Saturday = \OpenActive\Enums\SchemaOrg\DayOfWeek\Saturday::class;
    const Thursday = \OpenActive\Enums\SchemaOrg\DayOfWeek\Thursday::class;
}
