<?php

namespace Y2\ItemInventory;

class GetListItemInventoryDetailByStore_Reply
{
    /**
     * @var ArrayOfAvailableQtyByItemByStore $InventoryDetailsByStore
     */
    protected $InventoryDetailsByStore = null;

    public function __construct()
    {

    }

    /**
     * @return ArrayOfAvailableQtyByItemByStore
     */
    public function getInventoryDetailsByStore(): ?ArrayOfAvailableQtyByItemByStore
    {
        return $this->InventoryDetailsByStore;
    }

    /**
     * @param ArrayOfAvailableQtyByItemByStore $InventoryDetailsByStore
     * @return GetListItemInventoryDetailByStore_Reply
     */
    public function setInventoryDetailsByStore(ArrayOfAvailableQtyByItemByStore $InventoryDetailsByStore): GetListItemInventoryDetailByStore_Reply
    {
        $this->InventoryDetailsByStore = $InventoryDetailsByStore;
        return $this;
    }

}
