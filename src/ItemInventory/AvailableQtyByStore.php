<?php

namespace Y2\ItemInventory;

class AvailableQtyByStore
{
    /**
     * @var float $AvailableQty
     */
    protected $AvailableQty = null;

    /**
     * @var string $StoreDescription
     */
    protected $StoreDescription = null;

    /**
     * @var string $StoreId
     */
    protected $StoreId = null;
    
    public function __construct()
    {

    }

    /**
     * @return float
     */
    public function getAvailableQty(): ?float
    {
        return $this->AvailableQty;
    }

    /**
     * @param float $AvailableQty
     * @return AvailableQtyByStore
     */
    public function setAvailableQty(float $AvailableQty): AvailableQtyByStore
    {
        $this->AvailableQty = $AvailableQty;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreDescription(): ?string
    {
        return $this->StoreDescription;
    }

    /**
     * @param string $StoreDescription
     * @return AvailableQtyByStore
     */
    public function setStoreDescription(string $StoreDescription): AvailableQtyByStore
    {
        $this->StoreDescription = $StoreDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreId(): ?string
    {
        return $this->StoreId;
    }

    /**
     * @param string $StoreId
     * @return AvailableQtyByStore
     */
    public function setStoreId(string $StoreId): AvailableQtyByStore
    {
        $this->StoreId = $StoreId;
        return $this;
    }

}
