<?php

namespace Y2\SaleDocument;

class Update_Line
{

    /**
     * @var string $CatalogReference
     */
    protected $CatalogReference = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

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
     * @var OmniChannelLine $OmniChannel
     */
    protected $OmniChannel = null;

    /**
     * @var DocumentOrigin $Origin
     */
    protected $Origin = null;

    /**
     * @var string $PackageReference
     */
    protected $PackageReference = null;

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
     * @var ArrayOfUpdate_Tax $Taxes
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
     * @return Update_Line
     */
    public function setCatalogReference(string $CatalogReference): Update_Line
    {
      $this->CatalogReference = $CatalogReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return Update_Line
     */
    public function setComment(string $Comment): Update_Line
    {
      $this->Comment = $Comment;
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
     * @return Update_Line
     */
    public function setComplementaryDescription(string $ComplementaryDescription): Update_Line
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
     * @return Update_Line
     */
    public function setDeliveryDate(\DateTime $DeliveryDate = null, string $format=\DateTime::ATOM): Update_Line
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
     * @return Update_Line
     */
    public function setDiscountTypeId(string $DiscountTypeId): Update_Line
    {
      $this->DiscountTypeId = $DiscountTypeId;
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
     * @return Update_Line
     */
    public function setInitialDeliveryDate(\DateTime $InitialDeliveryDate = null, string $format=\DateTime::ATOM): Update_Line
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
     * @return Update_Line
     */
    public function setItemIdentifier(ItemIdentifier $ItemIdentifier): Update_Line
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
     * @return Update_Line
     */
    public function setLabel(string $Label): Update_Line
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
     * @return Update_Line
     */
    public function setNetUnitPrice(float $NetUnitPrice): Update_Line
    {
      $this->NetUnitPrice = $NetUnitPrice;
      return $this;
    }

    /**
     * @return OmniChannelLine
     */
    public function getOmniChannel(): OmniChannelLine
    {
      return $this->OmniChannel;
    }

    /**
     * @param OmniChannelLine $OmniChannel
     * @return Update_Line
     */
    public function setOmniChannel(OmniChannelLine $OmniChannel): Update_Line
    {
      $this->OmniChannel = $OmniChannel;
      return $this;
    }

    /**
     * @return DocumentOrigin
     */
    public function getOrigin(): DocumentOrigin
    {
      return $this->Origin;
    }

    /**
     * @param DocumentOrigin $Origin
     * @return Update_Line
     */
    public function setOrigin(DocumentOrigin $Origin): Update_Line
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageReference(): string
    {
      return $this->PackageReference;
    }

    /**
     * @param string $PackageReference
     * @return Update_Line
     */
    public function setPackageReference(string $PackageReference): Update_Line
    {
      $this->PackageReference = $PackageReference;
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
     * @return Update_Line
     */
    public function setQuantity(float $Quantity): Update_Line
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
     * @return Update_Line
     */
    public function setSalesPersonId(string $SalesPersonId): Update_Line
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
     * @return Update_Line
     */
    public function setSerialNumberId(string $SerialNumberId): Update_Line
    {
      $this->SerialNumberId = $SerialNumberId;
      return $this;
    }

    /**
     * @return ArrayOfUpdate_Tax
     */
    public function getTaxes(): ArrayOfUpdate_Tax
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfUpdate_Tax $Taxes
     * @return Update_Line
     */
    public function setTaxes(ArrayOfUpdate_Tax $Taxes): Update_Line
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
     * @return Update_Line
     */
    public function setUnitPrice(float $UnitPrice): Update_Line
    {
      $this->UnitPrice = $UnitPrice;
      return $this;
    }

}
