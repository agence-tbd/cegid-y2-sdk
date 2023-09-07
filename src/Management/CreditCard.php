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
    public function getAuthorizationNumber(): ?string
    {
      return $this->AuthorizationNumber;
    }

    /**
     * @param string $AuthorizationNumber
     * @return CreditCard
     */
    public function setAuthorizationNumber(string $AuthorizationNumber): CreditCard
    {
      $this->AuthorizationNumber = $AuthorizationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionNumber(): ?string
    {
      return $this->TransactionNumber;
    }

    /**
     * @param string $TransactionNumber
     * @return CreditCard
     */
    public function setTransactionNumber(string $TransactionNumber): CreditCard
    {
      $this->TransactionNumber = $TransactionNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionIssuer(): ?string
    {
        return $this->TransactionIssuer;
    }

    /**
     * @param string $TransactionIssuer
     * @return CreditCard
     */
    public function setTransactionIssuer(string $TransactionIssuer): CreditCard
    {
        $this->TransactionIssuer = $TransactionIssuer;
        return $this;
    }
}
