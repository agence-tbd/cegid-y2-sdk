<?php

namespace Y2\Customer;

class CustomerInsertData extends CustomerInputData
{
    /**
     * @var InternalGuid $CustomerGuid
     */
    protected $CustomerGuid = null;

    /**
     * @var string $CustomerId
     */
    protected $CustomerId = null;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return InternalGuid
     */
    public function getCustomerGuid(): ?InternalGuid
    {
        return $this->CustomerGuid;
    }

    /**
     * @param InternalGuid $CustomerGuid
     *
     * @return CustomerInsertData
     */
    public function setCustomerGuid(InternalGuid $CustomerGuid): CustomerInsertData
    {
        $this->CustomerGuid = $CustomerGuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId(): ?string
    {
        return $this->CustomerId;
    }

    /**
     * @param string $CustomerId
     *
     * @return CustomerInsertData
     */
    public function setCustomerId(string $CustomerId): CustomerInsertData
    {
        $this->CustomerId = $CustomerId;
        return $this;
    }

}
