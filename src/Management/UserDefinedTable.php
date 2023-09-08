<?php

namespace Y2\Management;

class UserDefinedTable
{
    /**
     * @var int $Id
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
     * @return int
     */
    public function getId(): ?int
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return UserDefinedTable
     */
    public function setId(?int $Id): UserDefinedTable
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
     * @return UserDefinedTable
     */
    public function setValue(?string $Value): UserDefinedTable
    {
      $this->Value = $Value;
      return $this;
    }

}
