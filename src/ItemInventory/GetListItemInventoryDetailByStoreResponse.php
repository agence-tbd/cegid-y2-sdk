<?php

namespace Y2\ItemInventory;

class GetListItemInventoryDetailByStoreResponse
{
    /**
     * @var GetListItemInventoryDetailByStore_Reply $GetListItemInventoryDetailByStoreResult
     */
    protected $GetListItemInventoryDetailByStoreResult = null;

    /**
     * @param GetListItemInventoryDetailByStore_Reply $GetListItemInventoryDetailByStoreResult
     */
    public function __construct(GetListItemInventoryDetailByStore_Reply $GetListItemInventoryDetailByStoreResult)
    {
        $this->GetListItemInventoryDetailByStoreResult = $GetListItemInventoryDetailByStoreResult;
    }

    /**
     * @return GetListItemInventoryDetailByStore_Reply
     */
    public function getGetListItemInventoryDetailByStoreResult(): GetListItemInventoryDetailByStore_Reply
    {
        return $this->GetListItemInventoryDetailByStoreResult;
    }

    /**
     * @param GetListItemInventoryDetailByStore_Reply $GetListItemInventoryDetailByStoreResult
     * @return GetListItemInventoryDetailByStoreResponse
     */
    public function setGetListItemInventoryDetailByStoreResult(GetListItemInventoryDetailByStore_Reply $GetListItemInventoryDetailByStoreResult): GetListItemInventoryDetailByStoreResponse
    {
        $this->GetListItemInventoryDetailByStoreResult = $GetListItemInventoryDetailByStoreResult;
        return $this;
    }

}
