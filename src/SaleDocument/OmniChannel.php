<?php

namespace Y2\SaleDocument;

class OmniChannel
{

    /**
     * @see BillingStatus
     * @var string $BillingStatus
     */
    protected $BillingStatus = null;

    /**
     * @var \DateTime $CancelDate
     */
    protected $CancelDate = null;

    /**
     * @var string $CancelReasonId
     */
    protected $CancelReasonId = null;

    /**
     * @see CancelStatus
     * @var string $CancelStatus
     */
    protected $CancelStatus = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var string $DeliveryStoreId
     */
    protected $DeliveryStoreId = null;

    /**
     * @see DeliveryType
     * @var string $DeliveryType
     */
    protected $DeliveryType = null;

    /**
     * @var string $DeliveryWarehouseId
     */
    protected $DeliveryWarehouseId = null;

    /**
     * @see FollowUpStatus
     * @var string $FollowUpStatus
     */
    protected $FollowUpStatus = null;

    /**
     * @var string $GiftMessage
     */
    protected $GiftMessage = null;

    /**
     * @var GiftMessageType $GiftMessageType
     */
    protected $GiftMessageType = null;

    /**
     * @var \DateTime $LockingDate
     */
    protected $LockingDate = null;

    /**
     * @var SaleDocumentIdentifier $OriginalDocument
     */
    protected $OriginalDocument = null;

    /**
     * @var string $PaymentMethodId
     */
    protected $PaymentMethodId = null;

    /**
     * @see PaymentStatus
     * @var string $PaymentStatus
     */
    protected $PaymentStatus = null;

    /**
     * @see OrderReturnStatus
     * @var string $ReturnStatus
     */
    protected $ReturnStatus = null;

    /**
     * @see ReturnType
     * @var string $ReturnType
     */
    protected $ReturnType = null;

    /**
     * @see ShippingStatus
     * @var string $ShippingStatus
     */
    protected $ShippingStatus = null;

    /**
     * @var string $Tracking
     */
    protected $Tracking = null;

    /**
     * @var string $Transporter
     */
    protected $Transporter = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getBillingStatus(): ?string
    {
      return $this->BillingStatus;
    }

    /**
     * @param string $BillingStatus
     * @return OmniChannel
     */
    public function setBillingStatus(?string $BillingStatus): OmniChannel
    {
      $this->BillingStatus = $BillingStatus;
      return $this;
    }

    /**
     * @return \DateTime|false|null
     */
    public function getCancelDate()
    {
      if ($this->CancelDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CancelDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime|null $CancelDate
     * @param string $format
     * @return OmniChannel
     */
    public function setCancelDate(\DateTime $CancelDate = null, string $format=\DateTime::ATOM): OmniChannel
    {
      if ($CancelDate == null) {
       $this->CancelDate = null;
      } else {
        $this->CancelDate = $CancelDate->format($format);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getCancelReasonId(): ?string
    {
      return $this->CancelReasonId;
    }

    /**
     * @param string $CancelReasonId
     * @return OmniChannel
     */
    public function setCancelReasonId(?string $CancelReasonId): OmniChannel
    {
      $this->CancelReasonId = $CancelReasonId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCancelStatus(): ?string
    {
      return $this->CancelStatus;
    }

    /**
     * @param string $CancelStatus
     * @return OmniChannel
     */
    public function setCancelStatus(?string $CancelStatus): OmniChannel
    {
      $this->CancelStatus = $CancelStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment(): ?string
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return OmniChannel
     */
    public function setComment(?string $Comment): OmniChannel
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryStoreId(): ?string
    {
      return $this->DeliveryStoreId;
    }

    /**
     * @param string $DeliveryStoreId
     * @return OmniChannel
     */
    public function setDeliveryStoreId(?string $DeliveryStoreId): OmniChannel
    {
      $this->DeliveryStoreId = $DeliveryStoreId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryType(): ?string
    {
      return $this->DeliveryType;
    }

    /**
     * @param string $DeliveryType
     * @return OmniChannel
     */
    public function setDeliveryType(?string $DeliveryType): OmniChannel
    {
      $this->DeliveryType = $DeliveryType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryWarehouseId(): ?string
    {
      return $this->DeliveryWarehouseId;
    }

    /**
     * @param string $DeliveryWarehouseId
     * @return OmniChannel
     */
    public function setDeliveryWarehouseId(?string $DeliveryWarehouseId): OmniChannel
    {
      $this->DeliveryWarehouseId = $DeliveryWarehouseId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFollowUpStatus(): ?string
    {
      return $this->FollowUpStatus;
    }

    /**
     * @param string $FollowUpStatus
     * @return OmniChannel
     */
    public function setFollowUpStatus(?string $FollowUpStatus): OmniChannel
    {
      $this->FollowUpStatus = $FollowUpStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getGiftMessage(): ?string
    {
      return $this->GiftMessage;
    }

    /**
     * @param string $GiftMessage
     * @return OmniChannel
     */
    public function setGiftMessage(?string $GiftMessage): OmniChannel
    {
      $this->GiftMessage = $GiftMessage;
      return $this;
    }

    /**
     * @return GiftMessageType
     */
    public function getGiftMessageType(): ?GiftMessageType
    {
      return $this->GiftMessageType;
    }

    /**
     * @param GiftMessageType $GiftMessageType
     * @return OmniChannel
     */
    public function setGiftMessageType(?GiftMessageType $GiftMessageType): OmniChannel
    {
      $this->GiftMessageType = $GiftMessageType;
      return $this;
    }

    /**
     * @return \DateTime|false|null
     */
    public function getLockingDate()
    {
      if ($this->LockingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LockingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime|null $LockingDate
     * @param string $format
     * @return OmniChannel
     */
    public function setLockingDate(\DateTime $LockingDate = null, string $format=\DateTime::ATOM): OmniChannel
    {
      if ($LockingDate == null) {
       $this->LockingDate = null;
      } else {
        $this->LockingDate = $LockingDate->format($format);
      }
      return $this;
    }

    /**
     * @return SaleDocumentIdentifier
     */
    public function getOriginalDocument(): ?SaleDocumentIdentifier
    {
      return $this->OriginalDocument;
    }

    /**
     * @param SaleDocumentIdentifier $OriginalDocument
     * @return OmniChannel
     */
    public function setOriginalDocument(?SaleDocumentIdentifier $OriginalDocument): OmniChannel
    {
      $this->OriginalDocument = $OriginalDocument;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethodId(): ?string
    {
      return $this->PaymentMethodId;
    }

    /**
     * @param string $PaymentMethodId
     * @return OmniChannel
     */
    public function setPaymentMethodId(?string $PaymentMethodId): OmniChannel
    {
      $this->PaymentMethodId = $PaymentMethodId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentStatus(): ?string
    {
      return $this->PaymentStatus;
    }

    /**
     * @param string $PaymentStatus
     * @return OmniChannel
     */
    public function setPaymentStatus(?string $PaymentStatus): OmniChannel
    {
      $this->PaymentStatus = $PaymentStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnStatus(): ?string
    {
      return $this->ReturnStatus;
    }

    /**
     * @param string $ReturnStatus
     * @return OmniChannel
     */
    public function setReturnStatus(?string $ReturnStatus): OmniChannel
    {
      $this->ReturnStatus = $ReturnStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnType(): ?string
    {
      return $this->ReturnType;
    }

    /**
     * @param string $ReturnType
     * @return OmniChannel
     */
    public function setReturnType(?string $ReturnType): OmniChannel
    {
      $this->ReturnType = $ReturnType;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingStatus(): ?string
    {
      return $this->ShippingStatus;
    }

    /**
     * @param string $ShippingStatus
     * @return OmniChannel
     */
    public function setShippingStatus(?string $ShippingStatus): OmniChannel
    {
      $this->ShippingStatus = $ShippingStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getTracking(): ?string
    {
      return $this->Tracking;
    }

    /**
     * @param string $Tracking
     * @return OmniChannel
     */
    public function setTracking(?string $Tracking): OmniChannel
    {
      $this->Tracking = $Tracking;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransporter(): ?string
    {
      return $this->Transporter;
    }

    /**
     * @param string $Transporter
     * @return OmniChannel
     */
    public function setTransporter(?string $Transporter): OmniChannel
    {
      $this->Transporter = $Transporter;
      return $this;
    }

}
