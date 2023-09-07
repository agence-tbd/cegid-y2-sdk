<?php

namespace Y2\SaleDocument;

class GetByKey
{

    /**
     * @var GetByKey_Request $searchRequest
     */
    protected $searchRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param GetByKey_Request $searchRequest
     * @param RetailContext $clientContext
     */
    public function __construct(GetByKey_Request $searchRequest, RetailContext $clientContext)
    {
      $this->searchRequest = $searchRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return GetByKey_Request
     */
    public function getSearchRequest(): ?GetByKey_Request
    {
      return $this->searchRequest;
    }

    /**
     * @param GetByKey_Request $searchRequest
     * @return GetByKey
     */
    public function setSearchRequest(GetByKey_Request $searchRequest): GetByKey
    {
      $this->searchRequest = $searchRequest;
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
     * @return GetByKey
     */
    public function setClientContext(RetailContext $clientContext): GetByKey
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
