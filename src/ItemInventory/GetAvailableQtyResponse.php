<?php

namespace Y2\ItemInventory;

class GetAvailableQtyResponse
{
    /**
     * @var AvailableQtyReturn $GetAvailableQtyResult
     */
    protected $GetAvailableQtyResult = null;

    /**
     * @param AvailableQtyReturn $GetAvailableQtyResult
     */
    public function __construct(AvailableQtyReturn $GetAvailableQtyResult)
    {
        $this->GetAvailableQtyResult = $GetAvailableQtyResult;
    }

    /**
     * @return AvailableQtyReturn
     */
    public function getGetAvailableQtyResult(): ?AvailableQtyReturn
    {
        return $this->GetAvailableQtyResult;
    }

    /**
     * @param AvailableQtyReturn $GetAvailableQtyResult
     * @return GetAvailableQtyResponse
     */
    public function setGetAvailableQtyResult(?AvailableQtyReturn $GetAvailableQtyResult): GetAvailableQtyResponse
    {
        $this->GetAvailableQtyResult = $GetAvailableQtyResult;
        return $this;
    }

}
