<?php

namespace Y2\Management;

class UserField
{
    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var UserFieldValue
     */
    protected $Value;

    /**
     * @var ?string $ValueType
     */
    protected $ValueType = null;

    public function __construct()
    {

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
     * @return UserField
     */
    public function setId(int $Id): UserField
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return UserFieldValue
     */
    public function getValue(): ?UserFieldValue
    {
        return $this->Value;
    }

    /**
     * @param UserFieldValue $Value
     * @return UserField
     */
    public function setValue(UserFieldValue $Value): UserField
    {
        $this->Value = $Value;
        return $this;
    }
}
