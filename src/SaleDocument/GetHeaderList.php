<?php

namespace Y2\SaleDocument;

class GetHeaderList
{

    /**
     * @var GetHeaderList_Request $searchRequest
     */
    protected $searchRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param GetHeaderList_Request $searchRequest
     * @param RetailContext $clientContext
     */
    public function __construct(GetHeaderList_Request $searchRequest, RetailContext $clientContext)
    {
      $this->searchRequest = $searchRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return GetHeaderList_Request
     */
    public function getSearchRequest(): GetHeaderList_Request
    {
      return $this->searchRequest;
    }

    /**
     * @param GetHeaderList_Request $searchRequest
     * @return GetHeaderList
     */
    public function setSearchRequest(GetHeaderList_Request $searchRequest): GetHeaderList
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
     * @return GetHeaderList
     */
    public function setClientContext(RetailContext $clientContext): GetHeaderList
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
