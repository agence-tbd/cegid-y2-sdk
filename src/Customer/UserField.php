<?php

namespace Y2\Customer;

class UserField
{
    /**
     * @var boolean $BooleanValue
     */
    protected $BooleanValue = null;

    /**
     * @var \DateTime $DateValue
     */
    protected $DateValue = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $ListElementValue
     */
    protected $ListElementValue = null;

    /**
     * @var float $NumberValue
     */
    protected $NumberValue = null;

    /**
     * @var string $TextValue
     */
    protected $TextValue = null;

    /**
     * @var UserFieldKind $ValueType
     */
    protected $ValueType = null;

    public function __construct()
    {

    }

    /**
     * @return boolean
     */
    public function getBooleanValue(): ?bool
    {
        return $this->BooleanValue;
    }

    /**
     * @param boolean $BooleanValue
     *
     * @return UserField
     */
    public function setBooleanValue(bool $BooleanValue): UserField
    {
        $this->BooleanValue = $BooleanValue;
        return $this;
    }

    /**
     * @return bool|\DateTime|null
     */
    public function getDateValue()
    {
        if ($this->DateValue == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateValue);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime|null $DateValue
     * @param string $format
     * @return UserField
     */
    public function setDateValue(\DateTime $DateValue = null, string $format=\DateTime::ATOM): UserField
    {
        $this->DateValue = $DateValue?->format($format);
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
     * @return UserField
     */
    public function setId(int $Id): UserField
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getListElementValue(): ?string
    {
        return $this->ListElementValue;
    }

    /**
     * @param string $ListElementValue
     *
     * @return UserField
     */
    public function setListElementValue(string $ListElementValue): UserField
    {
        $this->ListElementValue = $ListElementValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getNumberValue(): ?float
    {
        return $this->NumberValue;
    }

    /**
     * @param float $NumberValue
     *
     * @return UserField
     */
    public function setNumberValue(float $NumberValue): UserField
    {
        $this->NumberValue = $NumberValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextValue(): ?string
    {
        return $this->TextValue;
    }

    /**
     * @param string $TextValue
     *
     * @return UserField
     */
    public function setTextValue(string $TextValue): UserField
    {
        $this->TextValue = $TextValue;
        return $this;
    }

    /**
     * @return UserFieldKind
     */
    public function getValueType(): ?UserFieldKind
    {
        return $this->ValueType;
    }

    /**
     * @param UserFieldKind $ValueType
     *
     * @return UserField
     */
    public function setValueType(UserFieldKind $ValueType): UserField
    {
        $this->ValueType = $ValueType;
        return $this;
    }

}
