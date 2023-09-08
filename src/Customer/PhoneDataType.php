<?php

namespace Y2\Customer;

class PhoneDataType
{
    /**
     * @var string $AlternativePhoneNumber
     */
    protected $AlternativePhoneNumber = null;

    /**
     * @var string $CellularPhoneNumber
     */
    protected $CellularPhoneNumber = null;

    /**
     * @var string $HomePhoneNumber
     */
    protected $HomePhoneNumber = null;

    /**
     * @var string $OfficePhoneNumber
     */
    protected $OfficePhoneNumber = null;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getAlternativePhoneNumber(): ?string
    {
        return $this->AlternativePhoneNumber;
    }

    /**
     * @param string $AlternativePhoneNumber
     *
     * @return PhoneDataType
     */
    public function setAlternativePhoneNumber(?string $AlternativePhoneNumber): PhoneDataType
    {
        $this->AlternativePhoneNumber = $AlternativePhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCellularPhoneNumber(): ?string
    {
        return $this->CellularPhoneNumber;
    }

    /**
     * @param string $CellularPhoneNumber
     *
     * @return PhoneDataType
     */
    public function setCellularPhoneNumber(?string $CellularPhoneNumber): PhoneDataType
    {
        $this->CellularPhoneNumber = $CellularPhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomePhoneNumber(): ?string
    {
        return $this->HomePhoneNumber;
    }

    /**
     * @param string $HomePhoneNumber
     *
     * @return PhoneDataType
     */
    public function setHomePhoneNumber(?string $HomePhoneNumber): PhoneDataType
    {
        $this->HomePhoneNumber = $HomePhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfficePhoneNumber(): ?string
    {
        return $this->OfficePhoneNumber;
    }

    /**
     * @param string $OfficePhoneNumber
     *
     * @return PhoneDataType
     */
    public function setOfficePhoneNumber(?string $OfficePhoneNumber): PhoneDataType
    {
        $this->OfficePhoneNumber = $OfficePhoneNumber;
        return $this;
    }

}
