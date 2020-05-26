<?php

use OpenActive\Rpde\RpdeItem;
use OpenActive\Rpde\RpdeKind;
use OpenActive\Rpde\RpdeState;
use OpenActive\Models\OA as Models;

return [
    new RpdeItem([
        "Id" => "1",
        "Modified" => 4,
        "State" => RpdeState::UPDATED,
        "Kind" => RpdeKind::FACILITY_USE_SLOT,
        "Data" => new Models\Slot([
        ])
    ]),
    new RpdeItem([
        "Id" => "2",
        "Modified" => 4,
        "State" => RpdeState::UPDATED,
        "Kind" => RpdeKind::INDIVIDUAL_FACILITY_USE_SLOT,
        "Data" => new Models\Slot([
        ])
    ]),
    new RpdeItem([
        "Id" => "3",
        "Modified" => 5,
        "State" => RpdeState::DELETED,
        "Kind" => RpdeKind::FACILITY_USE_SLOT,
        "Data" => null
    ]),
    new RpdeItem([
        "Id" => "4",
        "Modified" => 5,
        "State" => RpdeState::DELETED,
        "Kind" => RpdeKind::INDIVIDUAL_FACILITY_USE_SLOT,
        "Data" => null
    ])
];
