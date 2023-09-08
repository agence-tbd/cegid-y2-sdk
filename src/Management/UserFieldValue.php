<?php

namespace Y2\Management;

class UserFieldValue
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
     * @return UserFieldValue
     */
    public function setBooleanValue(?bool $BooleanValue): UserFieldValue
    {
        $this->BooleanValue = $BooleanValue;
        return $this;
    }

    /**
     * @return \DateTime|false|null
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
     * @param \DateTime $DateValue
     * @return UserFieldValue
     */
    public function setDateValue(\DateTime $DateValue = null, $format=\DateTime::ATOM): UserFieldValue
    {
        if ($DateValue == null) {
            $this->DateValue = null;
        } else {
            $this->DateValue = $DateValue->format($format);
        }
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
     * @return UserFieldValue
     */
    public function setListElementValue(?string $ListElementValue): UserFieldValue
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
     * @return UserFieldValue
     */
    public function setNumberValue(?float $NumberValue): UserFieldValue
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
     * @return UserFieldValue
     */
    public function setTextValue(?string $TextValue): UserFieldValue
    {
        $this->TextValue = $TextValue;
        return $this;
    }
}
