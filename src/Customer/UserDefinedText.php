<?php

namespace Y2\Customer;

class UserDefinedText
{
    /**
     * @var UserDefinedId $Id
     */
    protected $Id = null;

    /**
     * @var string $Value
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
     * @return UserDefinedText
     */
    public function setId(UserDefinedId $Id): UserDefinedText
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     *
     * @return UserDefinedText
     */
    public function setValue(string $Value): UserDefinedText
    {
        $this->Value = $Value;
        return $this;
    }

}
