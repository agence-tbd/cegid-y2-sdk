<?php

namespace Y2\SaleDocument;

class Cancel
{

    /**
     * @var Cancel_Request $cancelRequest
     */
    protected $cancelRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param Cancel_Request $cancelRequest
     * @param RetailContext $clientContext
     */
    public function __construct(Cancel_Request $cancelRequest, RetailContext $clientContext)
    {
      $this->cancelRequest = $cancelRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return Cancel_Request
     */
    public function getCancelRequest(): ?Cancel_Request
    {
      return $this->cancelRequest;
    }

    /**
     * @param ?Cancel_Request $cancelRequest
     * @return Cancel
     */
    public function setCancelRequest(?Cancel_Request $cancelRequest): Cancel
    {
      $this->cancelRequest = $cancelRequest;
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
     * @return Cancel
     */
    public function setClientContext(?RetailContext $clientContext): Cancel
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
