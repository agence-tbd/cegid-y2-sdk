<?php

namespace Y2\SaleDocument;

class Lock
{

    /**
     * @var Lock_Request $lockRequest
     */
    protected $lockRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param Lock_Request $lockRequest
     * @param RetailContext $clientContext
     */
    public function __construct(Lock_Request $lockRequest, RetailContext $clientContext)
    {
      $this->lockRequest = $lockRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return Lock_Request
     */
    public function getLockRequest(): ?Lock_Request
    {
      return $this->lockRequest;
    }

    /**
     * @param Lock_Request $lockRequest
     * @return Lock
     */
    public function setLockRequest(Lock_Request $lockRequest): Lock
    {
      $this->lockRequest = $lockRequest;
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
     * @return Lock
     */
    public function setClientContext(RetailContext $clientContext): Lock
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
