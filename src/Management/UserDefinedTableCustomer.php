<?php

namespace Y2\Management;

class UserDefinedTableCustomer
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
     * @return UserDefinedTableCustomer
     */
    public function setId(?int $Id): UserDefinedTableCustomer
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
     * @return UserDefinedTableCustomer
     */
    public function setValue(?string $Value): UserDefinedTableCustomer
    {
      $this->Value = $Value;
      return $this;
    }

}
