<?php

namespace Y2\ItemInventory;

class AvailableQtyByItemByStore
{
    /**
     * @var string $ItemCode
     */
    protected $ItemCode = null;

    /**
     * @var ArrayOfStoreAvailableQty $StoresAvailableQty
     */
    protected $StoresAvailableQty = null;

    public function __construct()
    {

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
     * @return AvailableQtyByItemByStore
     */
    public function setItemCode(string $ItemCode): AvailableQtyByItemByStore
    {
        $this->ItemCode = $ItemCode;
        return $this;
    }

    /**
     * @return ArrayOfStoreAvailableQty
     */
    public function getStoresAvailableQty(): ?ArrayOfStoreAvailableQty
    {
        return $this->StoresAvailableQty;
    }

    /**
     * @param ArrayOfStoreAvailableQty $StoresAvailableQty
     * @return AvailableQtyByItemByStore
     */
    public function setStoresAvailableQty(ArrayOfStoreAvailableQty $StoresAvailableQty): AvailableQtyByItemByStore
    {
        $this->StoresAvailableQty = $StoresAvailableQty;
        return $this;
    }

}
