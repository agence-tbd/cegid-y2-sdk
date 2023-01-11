<?php

namespace Y2\Management;

class UserDefinedDate
{
    /**
     * @var int $Id
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
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return UserDefinedDate
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return \DateTime|false
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
     * @return UserDefinedDate
     */
    public function setValue(\DateTime $Value = null)
    {
      if ($Value == null) {
       $this->Value = null;
      } else {
        $this->Value = $Value->format(\DateTime::ATOM);
      }
      return $this;
    }

}
