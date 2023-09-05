<?php

namespace Y2\SaleDocument;

class CustomersReservationCreate_Line
{

    /**
     * @var string $CatalogReference
     */
    protected $CatalogReference = null;

    /**
     * @var string $ComplementaryDescription
     */
    protected $ComplementaryDescription = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var string $DiscountTypeId
     */
    protected $DiscountTypeId = null;

    /**
     * @var string $ExternalReference
     */
    protected $ExternalReference = null;

    /**
     * @var \DateTime $InitialDeliveryDate
     */
    protected $InitialDeliveryDate = null;

    /**
     * @var ItemIdentifier $ItemIdentifier
     */
    protected $ItemIdentifier = null;

    /**
     * @var string $Label
     */
    protected $Label = null;

    /**
     * @var float $NetUnitPrice
     */
    protected $NetUnitPrice = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $SalesPersonId
     */
    protected $SalesPersonId = null;

    /**
     * @var string $SerialNumberId
     */
    protected $SerialNumberId = null;

    /**
     * @var ArrayOfCreate_Tax $Taxes
     */
    protected $Taxes = null;

    /**
     * @var float $UnitPrice
     */
    protected $UnitPrice = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getCatalogReference(): string
    {
      return $this->CatalogReference;
    }

    /**
     * @param string $CatalogReference
     * @return CustomersReservationCreate_Line
     */
    public function setCatalogReference(string $CatalogReference): CustomersReservationCreate_Line
    {
      $this->CatalogReference = $CatalogReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getComplementaryDescription(): string
    {
      return $this->ComplementaryDescription;
    }

    /**
     * @param string $ComplementaryDescription
     * @return CustomersReservationCreate_Line
     */
    public function setComplementaryDescription(string $ComplementaryDescription): CustomersReservationCreate_Line
    {
      $this->ComplementaryDescription = $ComplementaryDescription;
      return $this;
    }

    /**
     * @return \DateTime|false|null
     */
    public function getDeliveryDate()
    {
      if ($this->DeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime|null $DeliveryDate
     * @param string $format
     * @return CustomersReservationCreate_Line
     */
    public function setDeliveryDate(\DateTime $DeliveryDate = null, string $format=\DateTime::ATOM): CustomersReservationCreate_Line
    {
      if ($DeliveryDate == null) {
       $this->DeliveryDate = null;
      } else {
        $this->DeliveryDate = $DeliveryDate->format($format);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscountTypeId(): string
    {
      return $this->DiscountTypeId;
    }

    /**
     * @param string $DiscountTypeId
     * @return CustomersReservationCreate_Line
     */
    public function setDiscountTypeId(string $DiscountTypeId): CustomersReservationCreate_Line
    {
      $this->DiscountTypeId = $DiscountTypeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalReference(): string
    {
      return $this->ExternalReference;
    }

    /**
     * @param string $ExternalReference
     * @return CustomersReservationCreate_Line
     */
    public function setExternalReference(string $ExternalReference): CustomersReservationCreate_Line
    {
      $this->ExternalReference = $ExternalReference;
      return $this;
    }

    /**
     * @return \DateTime|false|null
     */
    public function getInitialDeliveryDate()
    {
      if ($this->InitialDeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InitialDeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime|null $InitialDeliveryDate
     * @param string $format
     * @return CustomersReservationCreate_Line
     */
    public function setInitialDeliveryDate(\DateTime $InitialDeliveryDate = null, string $format=\DateTime::ATOM): CustomersReservationCreate_Line
    {
      if ($InitialDeliveryDate == null) {
       $this->InitialDeliveryDate = null;
      } else {
        $this->InitialDeliveryDate = $InitialDeliveryDate->format($format);
      }
      return $this;
    }

    /**
     * @return ItemIdentifier
     */
    public function getItemIdentifier(): ItemIdentifier
    {
      return $this->ItemIdentifier;
    }

    /**
     * @param ItemIdentifier $ItemIdentifier
     * @return CustomersReservationCreate_Line
     */
    public function setItemIdentifier(ItemIdentifier $ItemIdentifier): CustomersReservationCreate_Line
    {
      $this->ItemIdentifier = $ItemIdentifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
      return $this->Label;
    }

    /**
     * @param string $Label
     * @return CustomersReservationCreate_Line
     */
    public function setLabel(string $Label): CustomersReservationCreate_Line
    {
      $this->Label = $Label;
      return $this;
    }

    /**
     * @return float
     */
    public function getNetUnitPrice(): float
    {
      return $this->NetUnitPrice;
    }

    /**
     * @param float $NetUnitPrice
     * @return CustomersReservationCreate_Line
     */
    public function setNetUnitPrice(float $NetUnitPrice): CustomersReservationCreate_Line
    {
      $this->NetUnitPrice = $NetUnitPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
      return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return CustomersReservationCreate_Line
     */
    public function setQuantity(float $Quantity): CustomersReservationCreate_Line
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesPersonId(): string
    {
      return $this->SalesPersonId;
    }

    /**
     * @param string $SalesPersonId
     * @return CustomersReservationCreate_Line
     */
    public function setSalesPersonId(string $SalesPersonId): CustomersReservationCreate_Line
    {
      $this->SalesPersonId = $SalesPersonId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumberId(): string
    {
      return $this->SerialNumberId;
    }

    /**
     * @param string $SerialNumberId
     * @return CustomersReservationCreate_Line
     */
    public function setSerialNumberId(string $SerialNumberId): CustomersReservationCreate_Line
    {
      $this->SerialNumberId = $SerialNumberId;
      return $this;
    }

    /**
     * @return ArrayOfCreate_Tax
     */
    public function getTaxes(): ArrayOfCreate_Tax
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfCreate_Tax $Taxes
     * @return CustomersReservationCreate_Line
     */
    public function setTaxes(ArrayOfCreate_Tax $Taxes): CustomersReservationCreate_Line
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice(): float
    {
      return $this->UnitPrice;
    }

    /**
     * @param float $UnitPrice
     * @return CustomersReservationCreate_Line
     */
    public function setUnitPrice(float $UnitPrice): CustomersReservationCreate_Line
    {
      $this->UnitPrice = $UnitPrice;
      return $this;
    }

}
