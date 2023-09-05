<?php

namespace Y2\ItemInventory;

class GetAvailableQty
{
    /**
     * @var string $itemId
     */
    protected $itemId = null;

    /**
     * @var ItemIdentifier $itemIdentifier
     */
    protected $itemIdentifier = null;

    /**
     * @var string $storeId
     */
    protected $storeId = null;

    /**
     * @var string $warehouseId
     */
    protected $warehouseId = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param string         $itemId
     * @param ItemIdentifier $itemIdentifier
     * @param string         $storeId
     * @param string         $warehouseId
     * @param RetailContext  $clientContext
     */
    public function __construct(ItemIdentifier $itemIdentifier, string $itemId = null, string $storeId = null, string $warehouseId = null, RetailContext $clientContext = null)
    {
        $this->itemIdentifier = $itemIdentifier;
        $this->itemId         = $itemId;
        $this->storeId        = $storeId;
        $this->warehouseId    = $warehouseId;
        $this->clientContext  = $clientContext;
    }

    /**
     * @return string
     */
    public function getItemId(): string
    {
        return $this->itemId;
    }

    /**
     * @param string $itemId
     *
     * @return GetAvailableQty
     */
    public function setItemId(string $itemId): GetAvailableQty
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return ItemIdentifier
     */
    public function getItemIdentifier(): ItemIdentifier
    {
        return $this->itemIdentifier;
    }

    /**
     * @param ItemIdentifier $itemIdentifier
     *
     * @return GetAvailableQty
     */
    public function setItemIdentifier(ItemIdentifier $itemIdentifier): GetAvailableQty
    {
        $this->itemIdentifier = $itemIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreId(): string
    {
        return $this->storeId;
    }

    /**
     * @param string $storeId
     *
     * @return GetAvailableQty
     */
    public function setStoreId(string $storeId): GetAvailableQty
    {
        $this->storeId = $storeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseId(): string
    {
        return $this->warehouseId;
    }

    /**
     * @param string $warehouseId
     *
     * @return GetAvailableQty
     */
    public function setWarehouseId(string $warehouseId): GetAvailableQty
    {
        $this->warehouseId = $warehouseId;
        return $this;
    }

    /**
     * @return RetailContext
     */
    public function getClientContext(): RetailContext
    {
        return $this->clientContext;
    }

    /**
     * @param RetailContext $clientContext
     *
     * @return GetAvailableQty
     */
    public function setClientContext(RetailContext $clientContext): GetAvailableQty
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
