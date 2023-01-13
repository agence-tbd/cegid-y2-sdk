<?php

namespace Y2\Management;

class CreateFrom_Payment
{
    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var CreditCard $CreditCard
     */
    protected $CreditCard = null;

    /**
     * @var string $CurrencyId
     */
    protected $CurrencyId = null;

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $MethodId
     */
    protected $MethodId = null;

    /**
     * @var CreateFrom_ReceivedPayment $ReceivedPayment
     */
    protected $ReceivedPayment = null;

    /**
     * @var string $VoucherId
     */
    protected $VoucherId = null;

    /**
     * @param int $Id
     */
    public function __construct($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return CreateFrom_Payment
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return CreditCard
     */
    public function getCreditCard()
    {
        return $this->CreditCard;
    }

    /**
     * @param CreditCard $CreditCard
     * @return CreateFrom_Payment
     */
    public function setCreditCard($CreditCard)
    {
        $this->CreditCard = $CreditCard;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->CurrencyId;
    }

    /**
     * @param string $CurrencyId
     * @return CreateFrom_Payment
     */
    public function setCurrencyId($CurrencyId)
    {
        $this->CurrencyId = $CurrencyId;
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
     * @param \DateTime $DueDate
     * @return CreateFrom_Payment
     */
    public function setDueDate(\DateTime $DueDate = null, $format=\DateTime::ATOM)
    {
        if ($DueDate == null) {
            $this->DueDate = null;
        } else {
            $this->DueDate = $DueDate->format($format);
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return CreateFrom_Payment
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethodId()
    {
        return $this->MethodId;
    }

    /**
     * @param string $MethodId
     * @return CreateFrom_Payment
     */
    public function setMethodId($MethodId)
    {
        $this->MethodId = $MethodId;
        return $this;
    }

    /**
     * @return CreateFrom_ReceivedPayment
     */
    public function getReceivedPayment()
    {
        return $this->ReceivedPayment;
    }

    /**
     * @param CreateFrom_ReceivedPayment
     * @return CreateFrom_Payment
     */
    public function setReceivedPayment($ReceivedPayment)
    {
        $this->ReceivedPayment = $ReceivedPayment;
        return $this;
    }

    /**
     * @return string
     */
    public function getVoucherId()
    {
        return $this->VoucherId;
    }

    /**
     * @param string $VoucherId
     * @return CreateFrom_Payment
     */
    public function setVoucherId($VoucherId)
    {
        $this->VoucherId = $VoucherId;
        return $this;
    }
}
