<?php

namespace Y2\ItemInventory;

class GetListItemInventoryDetailByStore
{
    /**
     * @var GetListItemInventoryDetailByStore_Request $inventoryStoreItemDetailRequest
     */
    protected $inventoryStoreItemDetailRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param GetListItemInventoryDetailByStore_Request $inventoryStoreItemDetailRequest
     * @param RetailContext $clientContext
     */
    public function __construct(GetListItemInventoryDetailByStore_Request $inventoryStoreItemDetailRequest, RetailContext $clientContext)
    {
        $this->inventoryStoreItemDetailRequest = $inventoryStoreItemDetailRequest;
        $this->clientContext                   = $clientContext;
    }

    /**
     * @return GetListItemInventoryDetailByStore_Request
     */
    public function getInventoryStoreItemDetailRequest(): GetListItemInventoryDetailByStore_Request
    {
        return $this->inventoryStoreItemDetailRequest;
    }

    /**
     * @param GetListItemInventoryDetailByStore_Request $inventoryStoreItemDetailRequest
     * @return GetListItemInventoryDetailByStore
     */
    public function setInventoryStoreItemDetailRequest(GetListItemInventoryDetailByStore_Request $inventoryStoreItemDetailRequest): GetListItemInventoryDetailByStore
    {
        $this->inventoryStoreItemDetailRequest = $inventoryStoreItemDetailRequest;
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
     * @return GetListItemInventoryDetailByStore
     */
    public function setClientContext(RetailContext $clientContext): GetListItemInventoryDetailByStore
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
