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
     *
     * @return Create_Payment
     */
    public function setAmount(?float $Amount): Create_Payment
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getBonId(): ?string
    {
        return $this->BonId;
    }

    /**
     * @param string $BonId
     *
     * @return Create_Payment
     */
    public function setBonId(?string $BonId): Create_Payment
    {
        $this->BonId = $BonId;
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
     *
     * @return Create_Payment
     */
    public function setCreditCard(?CreditCard $CreditCard): Create_Payment
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
     *
     * @return Create_Payment
     */
    public function setCurrencyId(?string $CurrencyId): Create_Payment
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
    public function setDueDate(\DateTime $DueDate = null, string $format=\DateTime::ATOM): Create_Payment
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
     *
     * @return Create_Payment
     */
    public function setId(?int $Id): Create_Payment
    {
        $this->Id = $Id;
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
     *
     * @return Create_Payment
     */
    public function setIsReceivedPayment(?bool $IsReceivedPayment): Create_Payment
    {
        $this->IsReceivedPayment = $IsReceivedPayment;
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
     *
     * @return Create_Payment
     */
    public function setMethodId(?string $MethodId): Create_Payment
    {
        $this->MethodId = $MethodId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegisterOperationForReceivedPayment(): ?string
    {
        return $this->RegisterOperationForReceivedPayment;
    }

    /**
     * @param string $RegisterOperationForReceivedPayment
     *
     * @return Create_Payment
     */
    public function setRegisterOperationForReceivedPayment(?string $RegisterOperationForReceivedPayment): Create_Payment
    {
        $this->RegisterOperationForReceivedPayment = $RegisterOperationForReceivedPayment;
        return $this;
    }

}
