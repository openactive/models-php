<?php

namespace OpenActive\Rpde;

/**
 *
 */
class RpdeKind
{
    const SESSION_SERIES = "SessionSeries";
    const SCHEDULED_SESSION = "ScheduledSession";
    const SCHEDULED_SESSION_SESSION_SERIES = "ScheduledSession.SessionSeries";
    const SESSION_SERIES_SCHEDULED_SESSION = "SessionSeries.ScheduledSession";
    const FACILITY_USE = "FacilityUse";
    const INDIVIDUAL_FACILITY_USE = "IndividualFacilityUse";
    const FACILITY_USE_SLOT = "FacilityUse/Slot";
    const INDIVIDUAL_FACILITY_USE_SLOT = "IndividualFacilityUse/Slot";
    const COURSE = "Course";
    const COURSE_INSTANCE = "CourseInstance";
    const HEADLINE_EVENT = "HeadlineEvent";
    const EVENT = "Event";
    const EVENT_SERIES = "EventSeries";
    const ORDER = "Order";
    const ORDER_PROPOSAL = "OrderProposal";
}
