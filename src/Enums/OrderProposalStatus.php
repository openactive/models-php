<?php

namespace OpenActive\Enums;

/**
 *
 */
class OrderProposalStatus
{
    const AwaitingSellerConfirmation = \OpenActive\Enums\OA\OrderProposalStatus\AwaitingSellerConfirmation::class;
    const SellerAccepted = \OpenActive\Enums\OA\OrderProposalStatus\SellerAccepted::class;
    const SellerRejected = \OpenActive\Enums\OA\OrderProposalStatus\SellerRejected::class;
    const CustomerRejected = \OpenActive\Enums\OA\OrderProposalStatus\CustomerRejected::class;
}
