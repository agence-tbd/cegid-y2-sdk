<?php

namespace Y2\SaleDocument;

class Get_Line
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
     * @var string $ExternalReference
     */
    protected $ExternalReference = null;

    /**
     * @var \DateTime $InitialDeliveryDate
     */
    protected $InitialDeliveryDate = null;

    /**
     * @var string $ItemCode
     */
    protected $ItemCode = null;

    /**
     * @var string $ItemId
     */
    protected $ItemId = null;

    /**
     * @var string $ItemReference
     */
    protected $ItemReference = null;

    /**
     * @var string $Label
     */
    protected $Label = null;

    /**
     * @var string $MovementReasonId
     */
    protected $MovementReasonId = null;

    /**
     * @var GetOmniChannelLine $OmniChannel
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
     * @var int $Rank
     */
    protected $Rank = null;

    /**
     * @var string $SalesPersonId
     */
    protected $SalesPersonId = null;

    /**
     * @var string $SerialNumberId
     */
    protected $SerialNumberId = null;

    /**
     * @var float $TaxExcludedNetUnitPrice
     */
    protected $TaxExcludedNetUnitPrice = null;

    /**
     * @var float $TaxExcludedUnitPrice
     */
    protected $TaxExcludedUnitPrice = null;

    /**
     * @var float $TaxIncludedNetUnitPrice
     */
    protected $TaxIncludedNetUnitPrice = null;

    /**
     * @var float $TaxIncludedUnitPrice
     */
    protected $TaxIncludedUnitPrice = null;

    /**
     * @var string $WarehouseId
     */
    protected $WarehouseId = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getCatalogReference(): ?string
    {
      return $this->CatalogReference;
    }

    /**
     * @param string $CatalogReference
     * @return Get_Line
     */
    public function setCatalogReference(string $CatalogReference): Get_Line
    {
      $this->CatalogReference = $CatalogReference;
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
     * @return Get_Line
     */
    public function setComment(string $Comment): Get_Line
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getComplementaryDescription(): ?string
    {
      return $this->ComplementaryDescription;
    }

    /**
     * @param string $ComplementaryDescription
     * @return Get_Line
     */
    public function setComplementaryDescription(string $ComplementaryDescription): Get_Line
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
     * @return Get_Line
     */
    public function setDeliveryDate(\DateTime $DeliveryDate = null, string $format=\DateTime::ATOM): Get_Line
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
    public function getDiscountTypeId(): ?string
    {
      return $this->DiscountTypeId;
    }

    /**
     * @param string $DiscountTypeId
     * @return Get_Line
     */
    public function setDiscountTypeId(string $DiscountTypeId): Get_Line
    {
      $this->DiscountTypeId = $DiscountTypeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalReference(): ?string
    {
      return $this->ExternalReference;
    }

    /**
     * @param string $ExternalReference
     * @return Get_Line
     */
    public function setExternalReference(string $ExternalReference): Get_Line
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
     * @return Get_Line
     */
    public function setInitialDeliveryDate(\DateTime $InitialDeliveryDate = null, string $format=\DateTime::ATOM): Get_Line
    {
      if ($InitialDeliveryDate == null) {
       $this->InitialDeliveryDate = null;
      } else {
        $this->InitialDeliveryDate = $InitialDeliveryDate->format($format);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getItemCode(): ?string
    {
      return $this->ItemCode;
    }

    /**
     * @param string $ItemCode
     * @return Get_Line
     */
    public function setItemCode(string $ItemCode): Get_Line
    {
      $this->ItemCode = $ItemCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemId(): ?string
    {
      return $this->ItemId;
    }

    /**
     * @param string $ItemId
     * @return Get_Line
     */
    public function setItemId(string $ItemId): Get_Line
    {
      $this->ItemId = $ItemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemReference(): ?string
    {
      return $this->ItemReference;
    }

    /**
     * @param string $ItemReference
     * @return Get_Line
     */
    public function setItemReference(string $ItemReference): Get_Line
    {
      $this->ItemReference = $ItemReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): ?string
    {
      return $this->Label;
    }

    /**
     * @param string $Label
     * @return Get_Line
     */
    public function setLabel(string $Label): Get_Line
    {
      $this->Label = $Label;
      return $this;
    }

    /**
     * @return string
     */
    public function getMovementReasonId(): ?string
    {
      return $this->MovementReasonId;
    }

    /**
     * @param string $MovementReasonId
     * @return Get_Line
     */
    public function setMovementReasonId(string $MovementReasonId): Get_Line
    {
      $this->MovementReasonId = $MovementReasonId;
      return $this;
    }

    /**
     * @return GetOmniChannelLine
     */
    public function getOmniChannel(): ?GetOmniChannelLine
    {
      return $this->OmniChannel;
    }

    /**
     * @param GetOmniChannelLine $OmniChannel
     * @return Get_Line
     */
    public function setOmniChannel(GetOmniChannelLine $OmniChannel): Get_Line
    {
      $this->OmniChannel = $OmniChannel;
      return $this;
    }

    /**
     * @return DocumentOrigin
     */
    public function getOrigin(): ?DocumentOrigin
    {
      return $this->Origin;
    }

    /**
     * @param DocumentOrigin $Origin
     * @return Get_Line
     */
    public function setOrigin(DocumentOrigin $Origin): Get_Line
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageReference(): ?string
    {
      return $this->PackageReference;
    }

    /**
     * @param string $PackageReference
     * @return Get_Line
     */
    public function setPackageReference(string $PackageReference): Get_Line
    {
      $this->PackageReference = $PackageReference;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): ?float
    {
      return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return Get_Line
     */
    public function setQuantity(float $Quantity): Get_Line
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getRank(): ?int
    {
      return $this->Rank;
    }

    /**
     * @param int $Rank
     * @return Get_Line
     */
    public function setRank(int $Rank): Get_Line
    {
      $this->Rank = $Rank;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesPersonId(): ?string
    {
      return $this->SalesPersonId;
    }

    /**
     * @param string $SalesPersonId
     * @return Get_Line
     */
    public function setSalesPersonId(string $SalesPersonId): Get_Line
    {
      $this->SalesPersonId = $SalesPersonId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumberId(): ?string
    {
      return $this->SerialNumberId;
    }

    /**
     * @param string $SerialNumberId
     * @return Get_Line
     */
    public function setSerialNumberId(string $SerialNumberId): Get_Line
    {
      $this->SerialNumberId = $SerialNumberId;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxExcludedNetUnitPrice(): ?float
    {
      return $this->TaxExcludedNetUnitPrice;
    }

    /**
     * @param float $TaxExcludedNetUnitPrice
     * @return Get_Line
     */
    public function setTaxExcludedNetUnitPrice(float $TaxExcludedNetUnitPrice): Get_Line
    {
      $this->TaxExcludedNetUnitPrice = $TaxExcludedNetUnitPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxExcludedUnitPrice(): ?float
    {
      return $this->TaxExcludedUnitPrice;
    }

    /**
     * @param float $TaxExcludedUnitPrice
     * @return Get_Line
     */
    public function setTaxExcludedUnitPrice(float $TaxExcludedUnitPrice): Get_Line
    {
      $this->TaxExcludedUnitPrice = $TaxExcludedUnitPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxIncludedNetUnitPrice(): ?float
    {
      return $this->TaxIncludedNetUnitPrice;
    }

    /**
     * @param float $TaxIncludedNetUnitPrice
     * @return Get_Line
     */
    public function setTaxIncludedNetUnitPrice(float $TaxIncludedNetUnitPrice): Get_Line
    {
      $this->TaxIncludedNetUnitPrice = $TaxIncludedNetUnitPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxIncludedUnitPrice(): ?float
    {
      return $this->TaxIncludedUnitPrice;
    }

    /**
     * @param float $TaxIncludedUnitPrice
     * @return Get_Line
     */
    public function setTaxIncludedUnitPrice(float $TaxIncludedUnitPrice): Get_Line
    {
      $this->TaxIncludedUnitPrice = $TaxIncludedUnitPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseId(): ?string
    {
      return $this->WarehouseId;
    }

    /**
     * @param string $WarehouseId
     * @return Get_Line
     */
    public function setWarehouseId(string $WarehouseId): Get_Line
    {
      $this->WarehouseId = $WarehouseId;
      return $this;
    }

}
