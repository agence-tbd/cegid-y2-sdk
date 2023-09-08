<?php

namespace Y2\Management;

class CreateFrom_ReceivedPayment
{
    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var string $RegisterOperationId
     */
    protected $RegisterOperationId = null;

    public function __construct()
    {

    }

    public function isActive()
    {
        return $this->IsActive;
    }

    /**
     * @return boolean
     */
    public function getIsActive(): ?bool
    {
      return $this->IsActive;
    }

    /**
     * @param string $Id
     * @return CreateFrom_ReceivedPayment
     */
    public function setIsActive($IsActive): CreateFrom_ReceivedPayment
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegistredOperationId(): ?string
    {
      return $this->RegisterOperationId;
    }

    /**
     * @param string $RegisterOperationId
     * @return CreateFrom_ReceivedPayment
     */
    public function setRegistredOperationId(?string $RegisterOperationId): CreateFrom_ReceivedPayment
    {
      $this->RegisterOperationId = $RegisterOperationId;
      return $this;
    }
}
