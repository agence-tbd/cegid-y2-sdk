<?php

namespace Y2\SaleDocument;

class OmniChannelLine
{

    /**
     * @var string $WarehouseId
     */
    protected $WarehouseId = null;

    
    public function __construct()
    {
    
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
     * @return OmniChannelLine
     */
    public function setWarehouseId(string $WarehouseId): OmniChannelLine
    {
      $this->WarehouseId = $WarehouseId;
      return $this;
    }

}
