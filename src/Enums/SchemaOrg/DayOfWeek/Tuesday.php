<?php

namespace OpenActive\Enums\SchemaOrg\DayOfWeek;

/**
 * The day of the week, e.g. used to specify to which day the opening hours of an OpeningHoursSpecification refer.
 * 
 * Originally, URLs from [GoodRelations](http://purl.org/goodrelations/v1) were used (for [[Monday]], [[Tuesday]], [[Wednesday]], [[Thursday]], [[Friday]], [[Saturday]], [[Sunday]] plus a special entry for [[PublicHolidays]]); these have now been integrated directly into schema.org.
 *       
 *
 */
class Tuesday extends \OpenActive\Enums\SchemaOrg\DayOfWeek
{
    const value = "Tuesday";
    const memberVal = "https://schema.org/Tuesday";
}
