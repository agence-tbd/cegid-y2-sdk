<?php

namespace Y2\Management;

class CreditCard
{
    /**
     * @var string $AuthorizationNumber
     */
    protected $AuthorizationNumber = null;

    /**
     * @var string $TransactionNumber
     */
    protected $TransactionNumber = null;

    /**
     * @var string $TransactionIssuer
     */
    protected $TransactionIssuer = null;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getAuthorizationNumber()
    {
      return $this->AuthorizationNumber;
    }

    /**
     * @param string $AuthorizationNumber
     * @return CreditCard
     */
    public function setAuthorizationNumber($AuthorizationNumber)
    {
      $this->AuthorizationNumber = $AuthorizationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionNumber()
    {
      return $this->TransactionNumber;
    }

    /**
     * @param string $TransactionNumber
     * @return CreditCard
     */
    public function setTransactionNumber($TransactionNumber)
    {
      $this->TransactionNumber = $TransactionNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionIssuer()
    {
        return $this->TransactionIssuer;
    }

    /**
     * @param string $TransactionIssuer
     * @return CreditCard
     */
    public function setTransactionIssuer($TransactionIssuer)
    {
        $this->TransactionIssuer = $TransactionIssuer;
        return $this;
    }
}
