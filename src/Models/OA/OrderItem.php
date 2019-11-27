<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [OrderItem](https://schema.org/OrderItem), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
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
            "accessCode" => "accessCode",
            "accessToken" => "accessToken",
            "additionalProperty" => "additionalProperty",
            "allowCustomerCancellationFullRefund" => "allowCustomerCancellationFullRefund",
            "attendee" => "attendee",
            "attendeeDetailsRequired" => "attendeeDetailsRequired",
            "cancellationMessage" => "cancellationMessage",
            "customerNotice" => "customerNotice",
            "error" => "error",
            "orderedItem" => "orderedItem",
            "orderItemIntakeForm" => "orderItemIntakeForm",
            "orderItemIntakeFormResponse" => "orderItemIntakeFormResponse",
            "orderItemStatus" => "orderItemStatus",
            "unitTaxSpecification" => "unitTaxSpecification",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The offer from the associated orderedItem that has been selected by the Customer. The price of this includes or excludes tax depending on the taxMode of the Order.
     *
     *
     * @var \OpenActive\Models\OA\Offer
     */
    protected $acceptedOffer;

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
    protected $accessToken;

    /**
     * PropertyValue that contains a text value useful for reconciliation.
     *
     *
     * @var \OpenActive\Models\OA\PropertyValue[]
     */
    protected $additionalProperty;

    /**
     * Whether the event can be cancelled.
     *
     *
     * @var bool|null
     */
    protected $allowCustomerCancellationFullRefund;

    /**
     *
     *
     * @var \OpenActive\Models\OA\Person
     */
    protected $attendee;

    /**
     *
     *
     * @var string[]
     */
    protected $attendeeDetailsRequired;

    /**
     * A message set by the Seller in the event of Opportunity cancellation, only applicable for an  Order and where the OrderItem has  orderItemStatus set to  https://openactive.io/SellerCancelled
     *
     *
     * @var string
     */
    protected $cancellationMessage;

    /**
     * A message set by the Seller to trigger a notification to the Customer, only applicable for an Order and where the OrderItem has  orderItemStatus set to  https://openactive.io/OrderConfirmed or  https://openactive.io/CustomerAttended
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
     * @var \OpenActive\Models\OA\Event
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
     * Breakdown of tax payable for the OrderItem.
     *
     *
     * @var \OpenActive\Models\OA\TaxChargeSpecification[]
     */
    protected $unitTaxSpecification;

    /**
     * @return \OpenActive\Models\OA\Offer
     */
    public function getAcceptedOffer()
    {
        return $this->acceptedOffer;
    }

    /**
     * @param \OpenActive\Models\OA\Offer $acceptedOffer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcceptedOffer($acceptedOffer)
    {
        $types = array(
            "\OpenActive\Models\OA\Offer",
        );

        $acceptedOffer = self::checkTypes($acceptedOffer, $types);

        $this->acceptedOffer = $acceptedOffer;
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
        $types = array(
            "\OpenActive\Models\OA\PropertyValue[]",
        );

        $accessCode = self::checkTypes($accessCode, $types);

        $this->accessCode = $accessCode;
    }

    /**
     * @return \OpenActive\Models\OA\ImageObject[]
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param \OpenActive\Models\OA\ImageObject[] $accessToken
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessToken($accessToken)
    {
        $types = array(
            "\OpenActive\Models\OA\ImageObject[]",
        );

        $accessToken = self::checkTypes($accessToken, $types);

        $this->accessToken = $accessToken;
    }

    /**
     * @return \OpenActive\Models\OA\PropertyValue[]
     */
    public function getAdditionalProperty()
    {
        return $this->additionalProperty;
    }

    /**
     * @param \OpenActive\Models\OA\PropertyValue[] $additionalProperty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdditionalProperty($additionalProperty)
    {
        $types = array(
            "\OpenActive\Models\OA\PropertyValue[]",
        );

        $additionalProperty = self::checkTypes($additionalProperty, $types);

        $this->additionalProperty = $additionalProperty;
    }

    /**
     * @return bool|null
     */
    public function getAllowCustomerCancellationFullRefund()
    {
        return $this->allowCustomerCancellationFullRefund;
    }

    /**
     * @param bool|null $allowCustomerCancellationFullRefund
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAllowCustomerCancellationFullRefund($allowCustomerCancellationFullRefund)
    {
        $types = array(
            "bool",
            "null",
        );

        $allowCustomerCancellationFullRefund = self::checkTypes($allowCustomerCancellationFullRefund, $types);

        $this->allowCustomerCancellationFullRefund = $allowCustomerCancellationFullRefund;
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
        $types = array(
            "\OpenActive\Models\OA\Person",
        );

        $attendee = self::checkTypes($attendee, $types);

        $this->attendee = $attendee;
    }

    /**
     * @return string[]
     */
    public function getAttendeeDetailsRequired()
    {
        return $this->attendeeDetailsRequired;
    }

    /**
     * @param string[] $attendeeDetailsRequired
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAttendeeDetailsRequired($attendeeDetailsRequired)
    {
        $types = array(
            "string[]",
        );

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
        $types = array(
            "string",
        );

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
        $types = array(
            "string",
        );

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
        $types = array(
            "\OpenActive\Models\OA\OpenBookingError[]",
        );

        $error = self::checkTypes($error, $types);

        $this->error = $error;
    }

    /**
     * @return \OpenActive\Models\OA\Event
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    /**
     * @param \OpenActive\Models\OA\Event $orderedItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderedItem($orderedItem)
    {
        $types = array(
            "\OpenActive\Models\OA\Event",
        );

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
        $types = array(
            "\OpenActive\Models\OA\PropertyValueSpecification[]",
        );

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
        $types = array(
            "\OpenActive\Models\OA\PropertyValue[]",
        );

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
        $types = array(
            "\OpenActive\Enums\OrderItemStatus",
            "null",
        );

        $orderItemStatus = self::checkTypes($orderItemStatus, $types);

        $this->orderItemStatus = $orderItemStatus;
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
        $types = array(
            "\OpenActive\Models\OA\TaxChargeSpecification[]",
        );

        $unitTaxSpecification = self::checkTypes($unitTaxSpecification, $types);

        $this->unitTaxSpecification = $unitTaxSpecification;
    }

}
