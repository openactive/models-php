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
        "Kind" => RpdeKind::FACILITY_USE,
        "Data" => new Models\FacilityUse([
        ])
    ]),
    new RpdeItem([
        "Id" => "2",
        "Modified" => 4,
        "State" => RpdeState::UPDATED,
        "Kind" => RpdeKind::FACILITY_USE,
        "Data" => new Models\FacilityUse([
        ])
    ]),
    new RpdeItem([
        "Id" => "3",
        "Modified" => 5,
        "State" => RpdeState::DELETED,
        "Kind" => RpdeKind::FACILITY_USE,
        "Data" => null
    ])
];
