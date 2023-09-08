<?php

namespace Y2\Customer;

class UserDefinedDate
{
    /**
     * @var UserDefinedId $Id
     */
    protected $Id = null;

    /**
     * @var \DateTime $Value
     */
    protected $Value = null;

    public function __construct()
    {

    }

    /**
     * @return UserDefinedId
     */
    public function getId(): ?UserDefinedId
    {
        return $this->Id;
    }

    /**
     * @param UserDefinedId $Id
     *
     * @return UserDefinedDate
     */
    public function setId(?UserDefinedId $Id): UserDefinedDate
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return \DateTime|false|null
     */
    public function getValue()
    {
        if ($this->Value == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Value);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime|null $Value
     * @param string $format
     * @return UserDefinedDate
     */
    public function setValue(\DateTime $Value = null, string $format=\DateTime::ATOM): UserDefinedDate
    {
        $this->Value = $Value?->format($format);
        return $this;
    }

}
