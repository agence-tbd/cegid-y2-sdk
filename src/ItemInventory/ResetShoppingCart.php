<?php

namespace Y2\ItemInventory;

class ResetShoppingCart
{
    /**
     * @var ResetShoppingCart_Request $request
     */
    protected $request = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param ResetShoppingCart_Request $request
     * @param RetailContext $clientContext
     */
    public function __construct(ResetShoppingCart_Request $request, RetailContext $clientContext)
    {
        $this->request       = $request;
        $this->clientContext = $clientContext;
    }

    /**
     * @return ResetShoppingCart_Request
     */
    public function getRequest(): ResetShoppingCart_Request
    {
        return $this->request;
    }

    /**
     * @param ResetShoppingCart_Request $request
     * @return ResetShoppingCart
     */
    public function setRequest(ResetShoppingCart_Request $request): ResetShoppingCart
    {
        $this->request = $request;
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
     * @return ResetShoppingCart
     */
    public function setClientContext(RetailContext $clientContext): ResetShoppingCart
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
