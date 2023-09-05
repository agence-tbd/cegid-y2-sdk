<?php

namespace Y2\ItemInventory;

class StoreAvailableQty
{
    /**
     * @var float $AvailableQuantity
     */
    protected $AvailableQuantity = null;

    /**
     * @var ArrayOfAvailableSkuQty $AvailableSkusQty
     */
    protected $AvailableSkusQty = null;

    /**
     * @var string $StoreId
     */
    protected $StoreId = null;

    /**
     * @var string $StoreName
     */
    protected $StoreName = null;

    public function __construct()
    {

    }

    /**
     * @return float
     */
    public function getAvailableQuantity(): float
    {
        return $this->AvailableQuantity;
    }

    /**
     * @param float $AvailableQuantity
     * @return StoreAvailableQty
     */
    public function setAvailableQuantity(float $AvailableQuantity): StoreAvailableQty
    {
        $this->AvailableQuantity = $AvailableQuantity;
        return $this;
    }

    /**
     * @return ArrayOfAvailableSkuQty
     */
    public function getAvailableSkusQty(): ArrayOfAvailableSkuQty
    {
        return $this->AvailableSkusQty;
    }

    /**
     * @param ArrayOfAvailableSkuQty $AvailableSkusQty
     * @return StoreAvailableQty
     */
    public function setAvailableSkusQty(ArrayOfAvailableSkuQty $AvailableSkusQty): StoreAvailableQty
    {
        $this->AvailableSkusQty = $AvailableSkusQty;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreId(): string
    {
        return $this->StoreId;
    }

    /**
     * @param string $StoreId
     * @return StoreAvailableQty
     */
    public function setStoreId(string $StoreId): StoreAvailableQty
    {
        $this->StoreId = $StoreId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreName(): string
    {
        return $this->StoreName;
    }

    /**
     * @param string $StoreName
     * @return StoreAvailableQty
     */
    public function setStoreName(string $StoreName): StoreAvailableQty
    {
        $this->StoreName = $StoreName;
        return $this;
    }

}
