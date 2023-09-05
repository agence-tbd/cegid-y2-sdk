<?php

namespace Y2\SaleDocument;

class UpdateHeader
{

    /**
     * @var UpdateHeader_Request $updateHeaderRequest
     */
    protected $updateHeaderRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param UpdateHeader_Request $updateHeaderRequest
     * @param RetailContext $clientContext
     */
    public function __construct(UpdateHeader_Request $updateHeaderRequest, RetailContext $clientContext)
    {
      $this->updateHeaderRequest = $updateHeaderRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return UpdateHeader_Request
     */
    public function getUpdateHeaderRequest(): UpdateHeader_Request
    {
      return $this->updateHeaderRequest;
    }

    /**
     * @param UpdateHeader_Request $updateHeaderRequest
     * @return UpdateHeader
     */
    public function setUpdateHeaderRequest(UpdateHeader_Request $updateHeaderRequest): UpdateHeader
    {
      $this->updateHeaderRequest = $updateHeaderRequest;
      return $this;
    }

    /**
     * @return RetailContext
     */
    public function getClientContext(): RetailContext
    {
      return $this->clientContext;
    }

    /**
     * @param RetailContext $clientContext
     * @return UpdateHeader
     */
    public function setClientContext(RetailContext $clientContext): UpdateHeader
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
