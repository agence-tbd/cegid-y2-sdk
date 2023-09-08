<?php

namespace Y2\SaleDocument;

class Create_Line
{

    /**
     * @var string $BonId
     */
    protected $BonId = null;

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
     * @var ?string $DiscountTypeId
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
     * @var string $MovementReasonId
     */
    protected $MovementReasonId = null;

    /**
     * @var float $NetUnitPrice
     */
    protected $NetUnitPrice = null;

    /**
     * @var OmniChannelLine $OmniChannel
     */
    protected $OmniChannel = null;

    /**
     * @see DocumentOrigin
     * @var string $Origin
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
    public function getBonId(): ?string
    {
        return $this->BonId;
    }

    /**
     * @param string $BonId
     *
     * @return Create_Line
     */
    public function setBonId(?string $BonId): Create_Line
    {
        $this->BonId = $BonId;
        return $this;
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
     *
     * @return Create_Line
     */
    public function setCatalogReference(?string $CatalogReference): Create_Line
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
     *
     * @return Create_Line
     */
    public function setComment(?string $Comment): Create_Line
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
     *
     * @return Create_Line
     */
    public function setComplementaryDescription(?string $ComplementaryDescription): Create_Line
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
     * @return Create_Line
     */
    public function setDeliveryDate(\DateTime $DeliveryDate = null, string $format=\DateTime::ATOM): Create_Line
    {
        if ($DeliveryDate == null) {
            $this->DeliveryDate = null;
        } else {
            $this->DeliveryDate = $DeliveryDate->format($format);
        }
        return $this;
    }

    /**
     * @return ?string
     */
    public function getDiscountTypeId(): ?string
    {
        return $this->DiscountTypeId;
    }

    /**
     * @param ?string $DiscountTypeId
     *
     * @return Create_Line
     */
    public function setDiscountTypeId(?string $DiscountTypeId): Create_Line
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
     *
     * @return Create_Line
     */
    public function setExternalReference(?string $ExternalReference): Create_Line
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
     * @return Create_Line
     */
    public function setInitialDeliveryDate(\DateTime $InitialDeliveryDate = null, string $format=\DateTime::ATOM): Create_Line
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
    public function getItemIdentifier(): ?ItemIdentifier
    {
        return $this->ItemIdentifier;
    }

    /**
     * @param ItemIdentifier $ItemIdentifier
     *
     * @return Create_Line
     */
    public function setItemIdentifier(?ItemIdentifier $ItemIdentifier): Create_Line
    {
        $this->ItemIdentifier = $ItemIdentifier;
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
     *
     * @return Create_Line
     */
    public function setLabel(?string $Label): Create_Line
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
     *
     * @return Create_Line
     */
    public function setMovementReasonId(?string $MovementReasonId): Create_Line
    {
        $this->MovementReasonId = $MovementReasonId;
        return $this;
    }

    /**
     * @return float
     */
    public function getNetUnitPrice(): ?float
    {
        return $this->NetUnitPrice;
    }

    /**
     * @param float $NetUnitPrice
     *
     * @return Create_Line
     */
    public function setNetUnitPrice(?float $NetUnitPrice): Create_Line
    {
        $this->NetUnitPrice = $NetUnitPrice;
        return $this;
    }

    /**
     * @return OmniChannelLine
     */
    public function getOmniChannel(): ?OmniChannelLine
    {
        return $this->OmniChannel;
    }

    /**
     * @param OmniChannelLine $OmniChannel
     *
     * @return Create_Line
     */
    public function setOmniChannel(?OmniChannelLine $OmniChannel): Create_Line
    {
        $this->OmniChannel = $OmniChannel;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin(): ?string
    {
        return $this->Origin;
    }

    /**
     * @param string $Origin
     *
     * @return Create_Line
     */
    public function setOrigin(?string $Origin): Create_Line
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
     *
     * @return Create_Line
     */
    public function setPackageReference(?string $PackageReference): Create_Line
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
     *
     * @return Create_Line
     */
    public function setQuantity(?float $Quantity): Create_Line
    {
        $this->Quantity = $Quantity;
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
     *
     * @return Create_Line
     */
    public function setSalesPersonId(?string $SalesPersonId): Create_Line
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
     *
     * @return Create_Line
     */
    public function setSerialNumberId(?string $SerialNumberId): Create_Line
    {
        $this->SerialNumberId = $SerialNumberId;
        return $this;
    }

    /**
     * @return ArrayOfCreate_Tax
     */
    public function getTaxes(): ?ArrayOfCreate_Tax
    {
        return $this->Taxes;
    }

    /**
     * @param ArrayOfCreate_Tax $Taxes
     *
     * @return Create_Line
     */
    public function setTaxes(?ArrayOfCreate_Tax $Taxes): Create_Line
    {
        $this->Taxes = $Taxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice(): ?float
    {
        return $this->UnitPrice;
    }

    /**
     * @param float $UnitPrice
     *
     * @return Create_Line
     */
    public function setUnitPrice(?float $UnitPrice): Create_Line
    {
        $this->UnitPrice = $UnitPrice;
        return $this;
    }

}
