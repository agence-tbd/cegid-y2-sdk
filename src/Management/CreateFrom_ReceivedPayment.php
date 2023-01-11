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
    public function getIsActive()
    {
      return $this->IsActive;
    }

    /**
     * @param string $Id
     * @return CreateFrom_ReceivedPayment
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegistredOperationId()
    {
      return $this->RegisterOperationId;
    }

    /**
     * @param string $RegisterOperationId
     * @return CreateFrom_ReceivedPayment
     */
    public function setRegistredOperationId($RegisterOperationId)
    {
      $this->RegisterOperationId = $RegisterOperationId;
      return $this;
    }
}
