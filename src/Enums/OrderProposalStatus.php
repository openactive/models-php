<?php

namespace OpenActive\Enums;

/**
 *
 */
class OrderProposalStatus
{
    const AwaitingSellerConfirmation = \OpenActive\Enums\OrderProposalStatus\AwaitingSellerConfirmation::class;
    const SellerAccepted = \OpenActive\Enums\OrderProposalStatus\SellerAccepted::class;
    const SellerRejected = \OpenActive\Enums\OrderProposalStatus\SellerRejected::class;
    const CustomerRejected = \OpenActive\Enums\OrderProposalStatus\CustomerRejected::class;
}
