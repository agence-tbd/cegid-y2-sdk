<?php

namespace Y2\SaleDocument;

class Close
{

    /**
     * @var Close_Request $closeRequest
     */
    protected $closeRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param Close_Request $closeRequest
     * @param RetailContext $clientContext
     */
    public function __construct(Close_Request $closeRequest, RetailContext $clientContext)
    {
      $this->closeRequest = $closeRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return Close_Request
     */
    public function getCloseRequest(): Close_Request
    {
      return $this->closeRequest;
    }

    /**
     * @param Close_Request $closeRequest
     * @return Close
     */
    public function setCloseRequest(Close_Request $closeRequest): Close
    {
      $this->closeRequest = $closeRequest;
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
     * @return Close
     */
    public function setClientContext(RetailContext $clientContext): Close
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
