<?php

namespace Y2\ItemInventory;

class GetAvailableCumulativeQtyAllStores
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
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param string $itemId
     * @param ItemIdentifier $itemIdentifier
     * @param RetailContext $clientContext
     */
    public function __construct(string $itemId, ItemIdentifier $itemIdentifier, RetailContext $clientContext)
    {
        $this->itemId         = $itemId;
        $this->itemIdentifier = $itemIdentifier;
        $this->clientContext  = $clientContext;
    }

    /**
     * @return string
     */
    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    /**
     * @param string $itemId
     * @return GetAvailableCumulativeQtyAllStores
     */
    public function setItemId(string $itemId): GetAvailableCumulativeQtyAllStores
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return ItemIdentifier
     */
    public function getItemIdentifier(): ?ItemIdentifier
    {
        return $this->itemIdentifier;
    }

    /**
     * @param ItemIdentifier $itemIdentifier
     * @return GetAvailableCumulativeQtyAllStores
     */
    public function setItemIdentifier(ItemIdentifier $itemIdentifier): GetAvailableCumulativeQtyAllStores
    {
        $this->itemIdentifier = $itemIdentifier;
        return $this;
    }

    /**
     * @return RetailContext
     */
    public function getClientContext(): ?RetailContext
    {
        return $this->clientContext;
    }

    /**
     * @param RetailContext $clientContext
     * @return GetAvailableCumulativeQtyAllStores
     */
    public function setClientContext(RetailContext $clientContext): GetAvailableCumulativeQtyAllStores
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
