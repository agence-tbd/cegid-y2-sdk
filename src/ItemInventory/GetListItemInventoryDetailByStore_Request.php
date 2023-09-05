<?php

namespace Y2\ItemInventory;

class GetListItemInventoryDetailByStore_Request
{
    /**
     * @var boolean $AllAvailableWarehouse
     */
    protected $AllAvailableWarehouse = null;

    /**
     * @var boolean $DetailSku
     */
    protected $DetailSku = null;

    /**
     * @var ArrayOfItemIdentifier $ItemIdentifiers
     */
    protected $ItemIdentifiers = null;

    /**
     * @var boolean $OnlyAvailableStock
     */
    protected $OnlyAvailableStock = null;

    /**
     * @var Pager $Pager
     */
    protected $Pager = null;

    /**
     * @var ArrayOfstring $StoreIds
     */
    protected $StoreIds = null;

    /**
     * @var boolean $WithStoreName
     */
    protected $WithStoreName = null;

    public function __construct()
    {

    }

    /**
     * @return boolean
     */
    public function getAllAvailableWarehouse(): bool
    {
        return $this->AllAvailableWarehouse;
    }

    /**
     * @param boolean $AllAvailableWarehouse
     * @return GetListItemInventoryDetailByStore_Request
     */
    public function setAllAvailableWarehouse(bool $AllAvailableWarehouse): GetListItemInventoryDetailByStore_Request
    {
        $this->AllAvailableWarehouse = $AllAvailableWarehouse;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDetailSku(): bool
    {
        return $this->DetailSku;
    }

    /**
     * @param boolean $DetailSku
     * @return GetListItemInventoryDetailByStore_Request
     */
    public function setDetailSku(bool $DetailSku): GetListItemInventoryDetailByStore_Request
    {
        $this->DetailSku = $DetailSku;
        return $this;
    }

    /**
     * @return ArrayOfItemIdentifier
     */
    public function getItemIdentifiers(): ArrayOfItemIdentifier
    {
        return $this->ItemIdentifiers;
    }

    /**
     * @param ArrayOfItemIdentifier $ItemIdentifiers
     * @return GetListItemInventoryDetailByStore_Request
     */
    public function setItemIdentifiers(ArrayOfItemIdentifier $ItemIdentifiers): GetListItemInventoryDetailByStore_Request
    {
        $this->ItemIdentifiers = $ItemIdentifiers;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlyAvailableStock(): bool
    {
        return $this->OnlyAvailableStock;
    }

    /**
     * @param boolean $OnlyAvailableStock
     * @return GetListItemInventoryDetailByStore_Request
     */
    public function setOnlyAvailableStock(bool $OnlyAvailableStock): GetListItemInventoryDetailByStore_Request
    {
        $this->OnlyAvailableStock = $OnlyAvailableStock;
        return $this;
    }

    /**
     * @return Pager
     */
    public function getPager(): Pager
    {
        return $this->Pager;
    }

    /**
     * @param Pager $Pager
     * @return GetListItemInventoryDetailByStore_Request
     */
    public function setPager(Pager $Pager): GetListItemInventoryDetailByStore_Request
    {
        $this->Pager = $Pager;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getStoreIds(): ArrayOfstring
    {
        return $this->StoreIds;
    }

    /**
     * @param ArrayOfstring $StoreIds
     * @return GetListItemInventoryDetailByStore_Request
     */
    public function setStoreIds(ArrayOfstring $StoreIds): GetListItemInventoryDetailByStore_Request
    {
        $this->StoreIds = $StoreIds;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getWithStoreName(): bool
    {
        return $this->WithStoreName;
    }

    /**
     * @param boolean $WithStoreName
     * @return GetListItemInventoryDetailByStore_Request
     */
    public function setWithStoreName(bool $WithStoreName): GetListItemInventoryDetailByStore_Request
    {
        $this->WithStoreName = $WithStoreName;
        return $this;
    }

}
