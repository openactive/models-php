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
        "Kind" => RpdeKind::ORDER,
        "Data" => new Models\Order([
        ])
    ]),
    new RpdeItem([
        "Id" => "2",
        "Modified" => 4,
        "State" => RpdeState::UPDATED,
        "Kind" => RpdeKind::ORDER_PROPOSAL,
        "Data" => new Models\OrderProposal([
        ])
    ]),
    new RpdeItem([
        "Id" => "3",
        "Modified" => 5,
        "State" => RpdeState::DELETED,
        "Kind" => RpdeKind::ORDER,
        "Data" => null
    ]),
    new RpdeItem([
        "Id" => "4",
        "Modified" => 5,
        "State" => RpdeState::DELETED,
        "Kind" => RpdeKind::ORDER_PROPOSAL,
        "Data" => null
    ])
];
