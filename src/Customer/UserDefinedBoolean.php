<?php

namespace Y2\Customer;

class UserDefinedBoolean
{
    /**
     * @var UserDefinedId $Id
     */
    protected $Id = null;

    /**
     * @var boolean $Value
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
     * @return UserDefinedBoolean
     */
    public function setId(?UserDefinedId $Id): UserDefinedBoolean
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getValue(): ?bool
    {
        return $this->Value;
    }

    /**
     * @param boolean $Value
     *
     * @return UserDefinedBoolean
     */
    public function setValue(?bool $Value): UserDefinedBoolean
    {
        $this->Value = $Value;
        return $this;
    }

}
