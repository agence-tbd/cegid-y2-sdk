<?php

namespace Y2\SaleDocument;

class Create
{

    /**
     * @var Create_Request $createRequest
     */
    protected $createRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param Create_Request $createRequest
     * @param RetailContext $clientContext
     */
    public function __construct(Create_Request $createRequest, RetailContext $clientContext)
    {
      $this->createRequest = $createRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return Create_Request
     */
    public function getCreateRequest(): Create_Request
    {
      return $this->createRequest;
    }

    /**
     * @param Create_Request $createRequest
     * @return Create
     */
    public function setCreateRequest(Create_Request $createRequest): Create
    {
      $this->createRequest = $createRequest;
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
     * @return Create
     */
    public function setClientContext(RetailContext $clientContext): Create
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
