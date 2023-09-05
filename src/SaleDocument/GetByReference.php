<?php

namespace Y2\SaleDocument;

class GetByReference
{

    /**
     * @var GetByReference_Request $searchRequest
     */
    protected $searchRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param GetByReference_Request $searchRequest
     * @param RetailContext $clientContext
     */
    public function __construct(GetByReference_Request $searchRequest, RetailContext $clientContext)
    {
      $this->searchRequest = $searchRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return GetByReference_Request
     */
    public function getSearchRequest(): GetByReference_Request
    {
      return $this->searchRequest;
    }

    /**
     * @param GetByReference_Request $searchRequest
     * @return GetByReference
     */
    public function setSearchRequest(GetByReference_Request $searchRequest): GetByReference
    {
      $this->searchRequest = $searchRequest;
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
     * @return GetByReference
     */
    public function setClientContext(RetailContext $clientContext): GetByReference
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
