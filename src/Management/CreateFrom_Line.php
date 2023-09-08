<?php

namespace Y2\Management;

class CreateFrom_Line
{
    /**
     * @var string $AdditionalDescription
     */
    protected $AdditionalDescription;

    /**
     * @var string $CatalogReference
     */
    protected $CatalogReference;

    /**
     * @var string $ExternalReference
     */
    protected $ExternalReference;

    /**
     * @var ItemIdentifier $ItemIdentifier
     */
    protected $ItemIdentifier;

    /**
     * @var string $PackageReference
     */
    protected $PackageReference;

    /**
     * @var float $Quantity
     */
    protected $Quantity;

    /**
     * @var string $SalesPersonId
     */
    protected $SalesPersonId;

    /**
     * @var string $SerialNumberId
     */
    protected $SerialNumberId;

    /**
     * @var string $WarehouseId
     */
    protected $WarehouseId;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getAdditionalDescription(): ?string
    {
        return $this->AdditionalDescription;
    }

    /**
     * @param string $AdditionalDescription
     * @return CreateFrom_Line
     */
    public function setAdditionalDescription(?string $AdditionalDescription): CreateFrom_Line
    {
        $this->AdditionalDescription = $AdditionalDescription;
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
     * @return CreateFrom_Line
     */
    public function setCatalogReference(?string $CatalogReference): CreateFrom_Line
    {
        $this->CatalogReference = $CatalogReference;
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
     * @return CreateFrom_Line
     */
    public function setExternalReference(?string $ExternalReference): CreateFrom_Line
    {
        $this->ExternalReference = $ExternalReference;
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
     * @return CreateFrom_Line
     */
    public function setItemIdentifier(?ItemIdentifier $ItemIdentifier): CreateFrom_Line
    {
        $this->ItemIdentifier = $ItemIdentifier;
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
     * @return CreateFrom_Line
     */
    public function setPackageReference(?string $PackageReference): CreateFrom_Line
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
     * @return CreateFrom_Line
     */
    public function setQuantity(?float $Quantity): CreateFrom_Line
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
     * @return CreateFrom_Line
     */
    public function setSalesPersonId(?string $SalesPersonId): CreateFrom_Line
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
     * @return CreateFrom_Line
     */
    public function setSerialNumberId(?string $SerialNumberId): CreateFrom_Line
    {
        $this->SerialNumberId = $SerialNumberId;
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
     * @return CreateFrom_Line
     */
    public function setWarehouseId(?string $WarehouseId): CreateFrom_Line
    {
        $this->WarehouseId = $WarehouseId;
        return $this;
    }
}
