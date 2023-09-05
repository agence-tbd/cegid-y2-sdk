<?php

namespace Y2\Management;

class CreateFrom
{
    /**
     * @var CreateFrom_Request $Request
     */
    protected $Request = null;

    /**
     * @var RetailContext $Context
     */
    protected $Context = null;

    /**
     * @param CreateFrom_Request $Request
     * @param RetailContext $Context
     */
    public function __construct(CreateFrom_Request $Request, RetailContext $Context)
    {
      $this->Request = $Request;
      $this->Context = $Context;
    }

    /**
     * @return CreateFrom_Request
     */
    public function getRequest(): CreateFrom_Request
    {
      return $this->Request;
    }

    /**
     * @param CreateFrom_Request $Request
     * @return CreateFrom
     */
    public function setRequest(CreateFrom_Request $Request): CreateFrom
    {
      $this->Request = $Request;
      return $this;
    }

    /**
     * @return RetailContext
     */
    public function getContext(): RetailContext
    {
      return $this->Context;
    }

    /**
     * @param RetailContext $Context
     * @return CreateFrom
     */
    public function setContext(RetailContext $Context): CreateFrom
    {
      $this->Context = $Context;
      return $this;
    }

}
