<?php

namespace Y2\SaleDocument;

class Unlock
{

    /**
     * @var Unlock_Request $unlockRequest
     */
    protected $unlockRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param Unlock_Request $unlockRequest
     * @param RetailContext $clientContext
     */
    public function __construct(Unlock_Request $unlockRequest, RetailContext $clientContext)
    {
      $this->unlockRequest = $unlockRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return Unlock_Request
     */
    public function getUnlockRequest(): ?Unlock_Request
    {
      return $this->unlockRequest;
    }

    /**
     * @param Unlock_Request $unlockRequest
     * @return Unlock
     */
    public function setUnlockRequest(?Unlock_Request $unlockRequest): Unlock
    {
      $this->unlockRequest = $unlockRequest;
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
     * @return Unlock
     */
    public function setClientContext(?RetailContext $clientContext): Unlock
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
