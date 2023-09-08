<?php

namespace Y2\SaleDocument;

class GetOmniChannelLine
{

    /**
     * @var string $FollowUpStatus
     */
    protected $FollowUpStatus = null;

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
    public function getFollowUpStatus(): ?string
    {
      return $this->FollowUpStatus;
    }

    /**
     * @param string $FollowUpStatus
     * @return GetOmniChannelLine
     */
    public function setFollowUpStatus(?string $FollowUpStatus): GetOmniChannelLine
    {
      $this->FollowUpStatus = $FollowUpStatus;
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
     * @return GetOmniChannelLine
     */
    public function setWarehouseId(?string $WarehouseId): GetOmniChannelLine
    {
      $this->WarehouseId = $WarehouseId;
      return $this;
    }

}
