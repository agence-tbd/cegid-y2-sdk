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
    public function getAdditionalDescription()
    {
        return $this->AdditionalDescription;
    }

    /**
     * @param string $AdditionalDescription
     * @return CreateFrom_Line
     */
    public function setAdditionalDescription($AdditionalDescription)
    {
        $this->AdditionalDescription = $AdditionalDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getCatalogReference()
    {
        return $this->CatalogReference;
    }

    /**
     * @param string $CatalogReference
     * @return CreateFrom_Line
     */
    public function setCatalogReference($CatalogReference)
    {
        $this->CatalogReference = $CatalogReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalReference()
    {
        return $this->ExternalReference;
    }

    /**
     * @param string $ExternalReference
     * @return CreateFrom_Line
     */
    public function setExternalReference($ExternalReference)
    {
        $this->ExternalReference = $ExternalReference;
        return $this;
    }

    /**
     * @return ItemIdentifier
     */
    public function getItemIdentifier()
    {
        return $this->ItemIdentifier;
    }

    /**
     * @param ItemIdentifier $ItemIdentifier
     * @return CreateFrom_Line
     */
    public function setItemIdentifier($ItemIdentifier)
    {
        $this->ItemIdentifier = $ItemIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageReference()
    {
        return $this->PackageReference;
    }

    /**
     * @param string $PackageReference
     * @return CreateFrom_Line
     */
    public function setPackageReference($PackageReference)
    {
        $this->PackageReference = $PackageReference;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return CreateFrom_Line
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesPersonId()
    {
        return $this->SalesPersonId;
    }

    /**
     * @param string $SalesPersonId
     * @return CreateFrom_Line
     */
    public function setSalesPersonId($SalesPersonId)
    {
        $this->SalesPersonId = $SalesPersonId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumberId()
    {
        return $this->SerialNumberId;
    }

    /**
     * @param string $SerialNumberId
     * @return CreateFrom_Line
     */
    public function setSerialNumberId($SerialNumberId)
    {
        $this->SerialNumberId = $SerialNumberId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseId()
    {
        return $this->WarehouseId;
    }

    /**
     * @param string $WarehouseId
     * @return CreateFrom_Line
     */
    public function setWarehouseId($WarehouseId)
    {
        $this->WarehouseId = $WarehouseId;
        return $this;
    }
}
