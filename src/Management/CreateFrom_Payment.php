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
    public function __construct(int $Id)
    {
        $this->Id = $Id;
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
     * @return CreateFrom_Payment
     */
    public function setAmount(float $Amount): CreateFrom_Payment
    {
        $this->Amount = $Amount;
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
     * @return CreateFrom_Payment
     */
    public function setCreditCard(CreditCard $CreditCard): CreateFrom_Payment
    {
        $this->CreditCard = $CreditCard;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyId(): ?string
    {
        return $this->CurrencyId;
    }

    /**
     * @param string $CurrencyId
     * @return CreateFrom_Payment
     */
    public function setCurrencyId(string $CurrencyId): CreateFrom_Payment
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
    public function setDueDate(\DateTime $DueDate = null, $format=\DateTime::ATOM): CreateFrom_Payment
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
    public function getId(): ?int
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return CreateFrom_Payment
     */
    public function setId(int $Id): CreateFrom_Payment
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethodId(): ?string
    {
        return $this->MethodId;
    }

    /**
     * @param string $MethodId
     * @return CreateFrom_Payment
     */
    public function setMethodId(string $MethodId): CreateFrom_Payment
    {
        $this->MethodId = $MethodId;
        return $this;
    }

    /**
     * @return CreateFrom_ReceivedPayment
     */
    public function getReceivedPayment(): ?CreateFrom_ReceivedPayment
    {
        return $this->ReceivedPayment;
    }

    /**
     * @param CreateFrom_ReceivedPayment
     * @return CreateFrom_Payment
     */
    public function setReceivedPayment($ReceivedPayment): CreateFrom_Payment
    {
        $this->ReceivedPayment = $ReceivedPayment;
        return $this;
    }

    /**
     * @return string
     */
    public function getVoucherId(): ?string
    {
        return $this->VoucherId;
    }

    /**
     * @param string $VoucherId
     * @return CreateFrom_Payment
     */
    public function setVoucherId(string $VoucherId): CreateFrom_Payment
    {
        $this->VoucherId = $VoucherId;
        return $this;
    }
}
