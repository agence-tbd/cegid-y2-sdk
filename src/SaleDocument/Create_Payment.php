<?php

namespace Y2\SaleDocument;

class Create_Payment
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $BonId
     */
    protected $BonId = null;

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
     * @var boolean $IsReceivedPayment
     */
    protected $IsReceivedPayment = null;

    /**
     * @var string $MethodId
     */
    protected $MethodId = null;

    /**
     * @var string $RegisterOperationForReceivedPayment
     */
    protected $RegisterOperationForReceivedPayment = null;

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
     *
     * @return Create_Payment
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getBonId()
    {
        return $this->BonId;
    }

    /**
     * @param string $BonId
     *
     * @return Create_Payment
     */
    public function setBonId($BonId)
    {
        $this->BonId = $BonId;
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
     *
     * @return Create_Payment
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
     *
     * @return Create_Payment
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
     * @param \DateTime|null $DueDate
     * @param string $format
     * @return Create_Payment
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
     *
     * @return Create_Payment
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReceivedPayment()
    {
        return $this->IsReceivedPayment;
    }

    /**
     * @param boolean $IsReceivedPayment
     *
     * @return Create_Payment
     */
    public function setIsReceivedPayment($IsReceivedPayment)
    {
        $this->IsReceivedPayment = $IsReceivedPayment;
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
     *
     * @return Create_Payment
     */
    public function setMethodId($MethodId)
    {
        $this->MethodId = $MethodId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegisterOperationForReceivedPayment()
    {
        return $this->RegisterOperationForReceivedPayment;
    }

    /**
     * @param string $RegisterOperationForReceivedPayment
     *
     * @return Create_Payment
     */
    public function setRegisterOperationForReceivedPayment($RegisterOperationForReceivedPayment)
    {
        $this->RegisterOperationForReceivedPayment = $RegisterOperationForReceivedPayment;
        return $this;
    }

}
