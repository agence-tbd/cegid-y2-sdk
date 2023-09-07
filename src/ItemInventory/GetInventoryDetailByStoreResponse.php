<?php

namespace Y2\ItemInventory;

class GetInventoryDetailByStoreResponse
{
    /**
     * @var ArrayOfAvailableQtyByStore $GetInventoryDetailByStoreResult
     */
    protected $GetInventoryDetailByStoreResult = null;

    /**
     * @param ArrayOfAvailableQtyByStore $GetInventoryDetailByStoreResult
     */
    public function __construct(ArrayOfAvailableQtyByStore $GetInventoryDetailByStoreResult)
    {
        $this->GetInventoryDetailByStoreResult = $GetInventoryDetailByStoreResult;
    }

    /**
     * @return ArrayOfAvailableQtyByStore
     */
    public function getGetInventoryDetailByStoreResult(): ?ArrayOfAvailableQtyByStore
    {
        return $this->GetInventoryDetailByStoreResult;
    }

    /**
     * @param ArrayOfAvailableQtyByStore $GetInventoryDetailByStoreResult
     * @return GetInventoryDetailByStoreResponse
     */
    public function setGetInventoryDetailByStoreResult(ArrayOfAvailableQtyByStore $GetInventoryDetailByStoreResult): GetInventoryDetailByStoreResponse
    {
        $this->GetInventoryDetailByStoreResult = $GetInventoryDetailByStoreResult;
        return $this;
    }

}
