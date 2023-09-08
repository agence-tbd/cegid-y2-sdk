<?php

namespace Y2\SaleDocument;

class Update
{

    /**
     * @var Update_Request $updateRequest
     */
    protected $updateRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param Update_Request $updateRequest
     * @param RetailContext $clientContext
     */
    public function __construct(Update_Request $updateRequest, RetailContext $clientContext)
    {
      $this->updateRequest = $updateRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return Update_Request
     */
    public function getUpdateRequest(): ?Update_Request
    {
      return $this->updateRequest;
    }

    /**
     * @param Update_Request $updateRequest
     * @return Update
     */
    public function setUpdateRequest(Update_Request $updateRequest): Update
    {
      $this->updateRequest = $updateRequest;
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
     * @return Update
     */
    public function setClientContext(?RetailContext $clientContext): Update
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
