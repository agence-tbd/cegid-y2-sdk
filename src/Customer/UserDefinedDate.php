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
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param UserDefinedId $Id
     *
     * @return UserDefinedDate
     */
    public function setId($Id)
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
     * @param \DateTime $Value
     *
     * @return UserDefinedDate
     */
    public function setValue(\DateTime $Value = null, $format=\DateTime::ATOM)
    {
        if ($Value == null) {
            $this->Value = null;
        } else {
            $this->Value = $Value->format($format);
        }
        return $this;
    }

}
