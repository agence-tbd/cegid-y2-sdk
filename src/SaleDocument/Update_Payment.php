<?php

namespace Y2\SaleDocument;

class Update_Payment
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
     * @return Update_Payment
     */
    public function setAmount(?float $Amount): Update_Payment
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
     * @return Update_Payment
     */
    public function setBonId(?string $BonId): Update_Payment
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
     * @return Update_Payment
     */
    public function setCreditCard(?CreditCard $CreditCard): Update_Payment
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
     * @return Update_Payment
     */
    public function setCurrencyId(?string $CurrencyId): Update_Payment
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
     * @return Update_Payment
     */
    public function setDueDate(\DateTime $DueDate = null, string $format=\DateTime::ATOM): Update_Payment
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
     * @return Update_Payment
     */
    public function setId(?int $Id): Update_Payment
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
     * @return Update_Payment
     */
    public function setIsReceivedPayment(?bool $IsReceivedPayment): Update_Payment
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
     * @return Update_Payment
     */
    public function setMethodId(?string $MethodId): Update_Payment
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
     * @return Update_Payment
     */
    public function setRegisterOperationForReceivedPayment(?string $RegisterOperationForReceivedPayment): Update_Payment
    {
      $this->RegisterOperationForReceivedPayment = $RegisterOperationForReceivedPayment;
      return $this;
    }

}
