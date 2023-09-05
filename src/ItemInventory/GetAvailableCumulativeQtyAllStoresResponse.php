<?php

namespace Y2\ItemInventory;

class GetAvailableCumulativeQtyAllStoresResponse
{
    /**
     * @var AvailableQtyReturn $GetAvailableCumulativeQtyAllStoresResult
     */
    protected $GetAvailableCumulativeQtyAllStoresResult = null;

    /**
     * @param AvailableQtyReturn $GetAvailableCumulativeQtyAllStoresResult
     */
    public function __construct(AvailableQtyReturn $GetAvailableCumulativeQtyAllStoresResult)
    {
        $this->GetAvailableCumulativeQtyAllStoresResult = $GetAvailableCumulativeQtyAllStoresResult;
    }

    /**
     * @return AvailableQtyReturn
     */
    public function getGetAvailableCumulativeQtyAllStoresResult(): AvailableQtyReturn
    {
        return $this->GetAvailableCumulativeQtyAllStoresResult;
    }

    /**
     * @param AvailableQtyReturn $GetAvailableCumulativeQtyAllStoresResult
     * @return GetAvailableCumulativeQtyAllStoresResponse
     */
    public function setGetAvailableCumulativeQtyAllStoresResult(AvailableQtyReturn $GetAvailableCumulativeQtyAllStoresResult): GetAvailableCumulativeQtyAllStoresResponse
    {
        $this->GetAvailableCumulativeQtyAllStoresResult = $GetAvailableCumulativeQtyAllStoresResult;
        return $this;
    }

}
