<?php

namespace Y2\ItemInventory;

class UpdateShoppingCart
{
    /**
     * @var UpdateShoppingCart_Request $request
     */
    protected $request = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param UpdateShoppingCart_Request $request
     * @param RetailContext $clientContext
     */
    public function __construct(UpdateShoppingCart_Request $request, RetailContext $clientContext)
    {
        $this->request       = $request;
        $this->clientContext = $clientContext;
    }

    /**
     * @return UpdateShoppingCart_Request
     */
    public function getRequest(): ?UpdateShoppingCart_Request
    {
        return $this->request;
    }

    /**
     * @param UpdateShoppingCart_Request $request
     * @return UpdateShoppingCart
     */
    public function setRequest(?UpdateShoppingCart_Request $request): UpdateShoppingCart
    {
        $this->request = $request;
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
     * @return UpdateShoppingCart
     */
    public function setClientContext(?RetailContext $clientContext): UpdateShoppingCart
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
