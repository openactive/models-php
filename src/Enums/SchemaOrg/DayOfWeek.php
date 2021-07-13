<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * The day of the week, e.g. used to specify to which day the opening hours of an OpeningHoursSpecification refer.
 * 
 * Originally, URLs from [GoodRelations](http://purl.org/goodrelations/v1) were used (for [[Monday]], [[Tuesday]], [[Wednesday]], [[Thursday]], [[Friday]], [[Saturday]], [[Sunday]] plus a special entry for [[PublicHolidays]]); these have now been integrated directly into schema.org.
 *       
 *
 */
class DayOfWeek
{
    const Saturday = \OpenActive\Enums\SchemaOrg\DayOfWeek\Saturday::class;
    const Monday = \OpenActive\Enums\SchemaOrg\DayOfWeek\Monday::class;
    const Thursday = \OpenActive\Enums\SchemaOrg\DayOfWeek\Thursday::class;
    const Sunday = \OpenActive\Enums\SchemaOrg\DayOfWeek\Sunday::class;
    const Wednesday = \OpenActive\Enums\SchemaOrg\DayOfWeek\Wednesday::class;
    const PublicHolidays = \OpenActive\Enums\SchemaOrg\DayOfWeek\PublicHolidays::class;
    const Tuesday = \OpenActive\Enums\SchemaOrg\DayOfWeek\Tuesday::class;
    const Friday = \OpenActive\Enums\SchemaOrg\DayOfWeek\Friday::class;
}
