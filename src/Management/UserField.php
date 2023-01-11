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
     * @var UserFieldKind $ValueType
     */
    protected $ValueType = null;

    public function __construct()
    {

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
     * @return UserField
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return UserFieldValue
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param UserFieldValue $Value
     * @return UserField
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
        return $this;
    }
}
