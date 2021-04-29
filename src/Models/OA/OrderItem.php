<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/OrderItem, which means that any of this type's properties within schema.org may also be used.
 *
 */
class OrderItem extends \OpenActive\Models\SchemaOrg\OrderItem
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "OrderItem";
    }

    public static function fieldList() {
        $fields = [
            "acceptedOffer" => "acceptedOffer",
            "accessChannel" => "accessChannel",
            "accessCode" => "accessCode",
            "accessPass" => "accessPass",
            "attendee" => "attendee",
            "attendeeDetailsRequired" => "attendeeDetailsRequired",
            "cancellationMessage" => "cancellationMessage",
            "customerNotice" => "customerNotice",
            "error" => "error",
            "orderedItem" => "orderedItem",
            "orderItemIntakeForm" => "orderItemIntakeForm",
            "orderItemIntakeFormResponse" => "orderItemIntakeFormResponse",
            "orderItemStatus" => "orderItemStatus",
            "position" => "position",
            "unitTaxSpecification" => "unitTaxSpecification",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The offer from the associated orderedItem that has been selected by the Customer. The price of this includes or excludes tax depending on the taxMode of the Order.
     *
     *
     * @var \OpenActive\Models\OA\Offer|string
     */
    protected $acceptedOffer;

    /**
     * Channel through which the user can participate in the Opportunity. Not applicable for an OrderQuote.
     *
     *
     * @var \OpenActive\Models\OA\VirtualLocation
     */
    protected $accessChannel;

    /**
     * PropertyValue that contains a text value usable for entrance. Not applicable for an  OrderQuote.
     *
     *
     * @var \OpenActive\Models\OA\PropertyValue[]
     */
    protected $accessCode;

    /**
     * ImageObject or Barcode that contains reference to an asset (e.g. Barcode, QR code image or PDF) usable for entrance. Not applicable for an OrderQuote.
     *
     *
     * @var \OpenActive\Models\OA\ImageObject[]
     */
    protected $accessPass;

    /**
     * The person attending the Opportunity related to the OrderItem.
     *
     *
     * @var \OpenActive\Models\OA\Person
     */
    protected $attendee;

    /**
     * The properties of `schema:Person` that are required to describe an `attendee` for this `OrderItem`.
     *
     *
     * @var \OpenActive\Enums\PropertyEnumeration[]|null
     */
    protected $attendeeDetailsRequired;

    /**
     * A message set by the Seller in the event of Opportunity cancellation, only applicable for an  `Order` and where the `OrderItem` has `orderItemStatus` set to `https://openactive.io/SellerCancelled`
     *
     *
     * @var string
     */
    protected $cancellationMessage;

    /**
     * A message set by the Seller to trigger a notification to the Customer, only applicable for an `Order` and where the `OrderItem` has `orderItemStatus` set to  `https://openactive.io/OrderItemConfirmed` or `https://openactive.io/CustomerAttended`
     *
     *
     * @var string
     */
    protected $customerNotice;

    /**
     * Array of errors related to the OrderItem being included in the Order, only applicable for an  OrderQuote.
     *
     *
     * @var \OpenActive\Models\OA\OpenBookingError[]
     */
    protected $error;

    /**
     * The specific bookable Thing that has been selected by the Customer. See the [Modelling-Opportunity-Data] for more information on these types. Note that the Broker Request and Orders feed only require id within these objects to be included; in these contexts, all other properties are ignored.
     *
     *
     * @var \OpenActive\Models\OA\Event|string
     */
    protected $orderedItem;

    /**
     * PropertyValueSpecifications that describe fields in the orderItemIntakeForm.
     *
     *
     * @var \OpenActive\Models\OA\PropertyValueSpecification[]
     */
    protected $orderItemIntakeForm;

    /**
     * PropertyValues that contains a text value responses to the orderItemIntakeForm.
     *
     *
     * @var \OpenActive\Models\OA\PropertyValue[]
     */
    protected $orderItemIntakeFormResponse;

    /**
     *
     *
     * @var \OpenActive\Enums\OrderItemStatus|null
     */
    protected $orderItemStatus;

    /**
     * An integer representing the order of OrderItems within the array.
     *
     *
     * @var int|null
     */
    protected $position;

    /**
     * Breakdown of tax payable for the OrderItem.
     *
     *
     * @var \OpenActive\Models\OA\TaxChargeSpecification[]
     */
    protected $unitTaxSpecification;

    /**
     * @return \OpenActive\Models\OA\Offer|string
     */
    public function getAcceptedOffer()
    {
        return $this->acceptedOffer;
    }

    /**
     * @param \OpenActive\Models\OA\Offer|string $acceptedOffer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcceptedOffer($acceptedOffer)
    {
        $types = [
            "\OpenActive\Models\OA\Offer",
            "string",
        ];

        $acceptedOffer = self::checkTypes($acceptedOffer, $types);

        $this->acceptedOffer = $acceptedOffer;
    }

    /**
     * @return \OpenActive\Models\OA\VirtualLocation
     */
    public function getAccessChannel()
    {
        return $this->accessChannel;
    }

    /**
     * @param \OpenActive\Models\OA\VirtualLocation $accessChannel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessChannel($accessChannel)
    {
        $types = [
            "\OpenActive\Models\OA\VirtualLocation",
        ];

        $accessChannel = self::checkTypes($accessChannel, $types);

        $this->accessChannel = $accessChannel;
    }

    /**
     * @return \OpenActive\Models\OA\PropertyValue[]
     */
    public function getAccessCode()
    {
        return $this->accessCode;
    }

    /**
     * @param \OpenActive\Models\OA\PropertyValue[] $accessCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessCode($accessCode)
    {
        $types = [
            "\OpenActive\Models\OA\PropertyValue[]",
        ];

        $accessCode = self::checkTypes($accessCode, $types);

        $this->accessCode = $accessCode;
    }

    /**
     * @return \OpenActive\Models\OA\ImageObject[]
     */
    public function getAccessPass()
    {
        return $this->accessPass;
    }

    /**
     * @param \OpenActive\Models\OA\ImageObject[] $accessPass
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessPass($accessPass)
    {
        $types = [
            "\OpenActive\Models\OA\ImageObject[]",
        ];

        $accessPass = self::checkTypes($accessPass, $types);

        $this->accessPass = $accessPass;
    }

    /**
     * @return \OpenActive\Models\OA\Person
     */
    public function getAttendee()
    {
        return $this->attendee;
    }

    /**
     * @param \OpenActive\Models\OA\Person $attendee
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAttendee($attendee)
    {
        $types = [
            "\OpenActive\Models\OA\Person",
        ];

        $attendee = self::checkTypes($attendee, $types);

        $this->attendee = $attendee;
    }

    /**
     * @return \OpenActive\Enums\PropertyEnumeration[]|null
     */
    public function getAttendeeDetailsRequired()
    {
        return $this->attendeeDetailsRequired;
    }

    /**
     * @param \OpenActive\Enums\PropertyEnumeration[]|null $attendeeDetailsRequired
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAttendeeDetailsRequired($attendeeDetailsRequired)
    {
        $types = [
            "\OpenActive\Enums\PropertyEnumeration[]",
            "null",
        ];

        $attendeeDetailsRequired = self::checkTypes($attendeeDetailsRequired, $types);

        $this->attendeeDetailsRequired = $attendeeDetailsRequired;
    }

    /**
     * @return string
     */
    public function getCancellationMessage()
    {
        return $this->cancellationMessage;
    }

    /**
     * @param string $cancellationMessage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCancellationMessage($cancellationMessage)
    {
        $types = [
            "string",
        ];

        $cancellationMessage = self::checkTypes($cancellationMessage, $types);

        $this->cancellationMessage = $cancellationMessage;
    }

    /**
     * @return string
     */
    public function getCustomerNotice()
    {
        return $this->customerNotice;
    }

    /**
     * @param string $customerNotice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCustomerNotice($customerNotice)
    {
        $types = [
            "string",
        ];

        $customerNotice = self::checkTypes($customerNotice, $types);

        $this->customerNotice = $customerNotice;
    }

    /**
     * @return \OpenActive\Models\OA\OpenBookingError[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param \OpenActive\Models\OA\OpenBookingError[] $error
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setError($error)
    {
        $types = [
            "\OpenActive\Models\OA\OpenBookingError[]",
        ];

        $error = self::checkTypes($error, $types);

        $this->error = $error;
    }

    /**
     * @return \OpenActive\Models\OA\Event|string
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    /**
     * @param \OpenActive\Models\OA\Event|string $orderedItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderedItem($orderedItem)
    {
        $types = [
            "\OpenActive\Models\OA\Event",
            "string",
        ];

        $orderedItem = self::checkTypes($orderedItem, $types);

        $this->orderedItem = $orderedItem;
    }

    /**
     * @return \OpenActive\Models\OA\PropertyValueSpecification[]
     */
    public function getOrderItemIntakeForm()
    {
        return $this->orderItemIntakeForm;
    }

    /**
     * @param \OpenActive\Models\OA\PropertyValueSpecification[] $orderItemIntakeForm
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderItemIntakeForm($orderItemIntakeForm)
    {
        $types = [
            "\OpenActive\Models\OA\PropertyValueSpecification[]",
        ];

        $orderItemIntakeForm = self::checkTypes($orderItemIntakeForm, $types);

        $this->orderItemIntakeForm = $orderItemIntakeForm;
    }

    /**
     * @return \OpenActive\Models\OA\PropertyValue[]
     */
    public function getOrderItemIntakeFormResponse()
    {
        return $this->orderItemIntakeFormResponse;
    }

    /**
     * @param \OpenActive\Models\OA\PropertyValue[] $orderItemIntakeFormResponse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderItemIntakeFormResponse($orderItemIntakeFormResponse)
    {
        $types = [
            "\OpenActive\Models\OA\PropertyValue[]",
        ];

        $orderItemIntakeFormResponse = self::checkTypes($orderItemIntakeFormResponse, $types);

        $this->orderItemIntakeFormResponse = $orderItemIntakeFormResponse;
    }

    /**
     * @return \OpenActive\Enums\OrderItemStatus|null
     */
    public function getOrderItemStatus()
    {
        return $this->orderItemStatus;
    }

    /**
     * @param \OpenActive\Enums\OrderItemStatus|null $orderItemStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderItemStatus($orderItemStatus)
    {
        $types = [
            "\OpenActive\Enums\OrderItemStatus",
            "null",
        ];

        $orderItemStatus = self::checkTypes($orderItemStatus, $types);

        $this->orderItemStatus = $orderItemStatus;
    }

    /**
     * @return int|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int|null $position
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPosition($position)
    {
        $types = [
            "int",
            "null",
        ];

        $position = self::checkTypes($position, $types);

        $this->position = $position;
    }

    /**
     * @return \OpenActive\Models\OA\TaxChargeSpecification[]
     */
    public function getUnitTaxSpecification()
    {
        return $this->unitTaxSpecification;
    }

    /**
     * @param \OpenActive\Models\OA\TaxChargeSpecification[] $unitTaxSpecification
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUnitTaxSpecification($unitTaxSpecification)
    {
        $types = [
            "\OpenActive\Models\OA\TaxChargeSpecification[]",
        ];

        $unitTaxSpecification = self::checkTypes($unitTaxSpecification, $types);

        $this->unitTaxSpecification = $unitTaxSpecification;
    }

}
