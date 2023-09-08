<?php

namespace Y2\SaleDocument;

class Get_Payment
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var float $CashAmount
     */
    protected $CashAmount = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var CreditCard $CreditCard
     */
    protected $CreditCard = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $CurrencySymbol
     */
    protected $CurrencySymbol = null;

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var boolean $IsReceivedPayment
     */
    protected $IsReceivedPayment = null;

    /**
     * @var string $Label
     */
    protected $Label = null;


    public function __construct()
    {

    }

    /**
     * @return float
     */
    public function getAmount(): ?float
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return Get_Payment
     */
    public function setAmount(?float $Amount): Get_Payment
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getCashAmount(): ?float
    {
      return $this->CashAmount;
    }

    /**
     * @param float $CashAmount
     * @return Get_Payment
     */
    public function setCashAmount(?float $CashAmount): Get_Payment
    {
      $this->CashAmount = $CashAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode(): ?string
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return Get_Payment
     */
    public function setCode(?string $Code): Get_Payment
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return CreditCard
     */
    public function getCreditCard(): ?CreditCard
    {
      return $this->CreditCard;
    }

    /**
     * @param CreditCard $CreditCard
     * @return Get_Payment
     */
    public function setCreditCard(?CreditCard $CreditCard): Get_Payment
    {
      $this->CreditCard = $CreditCard;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): ?string
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return Get_Payment
     */
    public function setCurrency(?string $Currency): Get_Payment
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencySymbol(): ?string
    {
      return $this->CurrencySymbol;
    }

    /**
     * @param string $CurrencySymbol
     * @return Get_Payment
     */
    public function setCurrencySymbol(?string $CurrencySymbol): Get_Payment
    {
      $this->CurrencySymbol = $CurrencySymbol;
      return $this;
    }

    /**
     * @return \DateTime|false|null
     */
    public function getDueDate()
    {
      if ($this->DueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime|null $DueDate
     * @param string $format
     * @return Get_Payment
     */
    public function setDueDate(\DateTime $DueDate = null, string $format=\DateTime::ATOM): Get_Payment
    {
      if ($DueDate == null) {
       $this->DueDate = null;
      } else {
        $this->DueDate = $DueDate->format($format);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReceivedPayment(): ?bool
    {
      return $this->IsReceivedPayment;
    }

    /**
     * @param boolean $IsReceivedPayment
     * @return Get_Payment
     */
    public function setIsReceivedPayment(?bool $IsReceivedPayment): Get_Payment
    {
      $this->IsReceivedPayment = $IsReceivedPayment;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): ?string
    {
      return $this->Label;
    }

    /**
     * @param string $Label
     * @return Get_Payment
     */
    public function setLabel(?string $Label): Get_Payment
    {
      $this->Label = $Label;
      return $this;
    }

}
