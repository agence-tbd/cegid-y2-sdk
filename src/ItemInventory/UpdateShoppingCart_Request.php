<?php

namespace Y2\ItemInventory;

class UpdateShoppingCart_Request
{
    /**
     * @var ItemIdentifier $ItemIdentifier
     */
    protected $ItemIdentifier = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $WarehouseId
     */
    protected $WarehouseId = null;

    /**
     * @param float $Quantity
     */
    public function __construct(float $Quantity)
    {
        $this->Quantity = $Quantity;
    }

    /**
     * @return ItemIdentifier
     */
    public function getItemIdentifier(): ?ItemIdentifier
    {
        return $this->ItemIdentifier;
    }

    /**
     * @param ItemIdentifier $ItemIdentifier
     * @return UpdateShoppingCart_Request
     */
    public function setItemIdentifier(?ItemIdentifier $ItemIdentifier): UpdateShoppingCart_Request
    {
        $this->ItemIdentifier = $ItemIdentifier;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): ?float
    {
        return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return UpdateShoppingCart_Request
     */
    public function setQuantity(?float $Quantity): UpdateShoppingCart_Request
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseId(): ?string
    {
        return $this->WarehouseId;
    }

    /**
     * @param string $WarehouseId
     * @return UpdateShoppingCart_Request
     */
    public function setWarehouseId(?string $WarehouseId): UpdateShoppingCart_Request
    {
        $this->WarehouseId = $WarehouseId;
        return $this;
    }

}
