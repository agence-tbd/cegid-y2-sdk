<?php

namespace Y2\Customer;

class AddressDataType
{
    /**
     * @var string $AddressLine1
     */
    protected $AddressLine1 = null;

    /**
     * @var string $AddressLine2
     */
    protected $AddressLine2 = null;

    /**
     * @var string $AddressLine3
     */
    protected $AddressLine3 = null;

    /**
     * @var string $BrandName
     */
    protected $BrandName = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $CountryId
     */
    protected $CountryId = null;

    /**
     * @var CountryIdType $CountryIdType
     */
    protected $CountryIdType = null;

    /**
     * @var boolean $Nata
     */
    protected $Nata = null;

    /**
     * @var string $RegionId
     */
    protected $RegionId = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getAddressLine1(): string
    {
        return $this->AddressLine1;
    }

    /**
     * @param string $AddressLine1
     *
     * @return AddressDataType
     */
    public function setAddressLine1(string $AddressLine1): AddressDataType
    {
        $this->AddressLine1 = $AddressLine1;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine2(): string
    {
        return $this->AddressLine2;
    }

    /**
     * @param string $AddressLine2
     *
     * @return AddressDataType
     */
    public function setAddressLine2(string $AddressLine2): AddressDataType
    {
        $this->AddressLine2 = $AddressLine2;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine3(): string
    {
        return $this->AddressLine3;
    }

    /**
     * @param string $AddressLine3
     *
     * @return AddressDataType
     */
    public function setAddressLine3(string $AddressLine3): AddressDataType
    {
        $this->AddressLine3 = $AddressLine3;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->BrandName;
    }

    /**
     * @param string $BrandName
     *
     * @return AddressDataType
     */
    public function setBrandName(string $BrandName): AddressDataType
    {
        $this->BrandName = $BrandName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->City;
    }

    /**
     * @param string $City
     *
     * @return AddressDataType
     */
    public function setCity(string $City): AddressDataType
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryId(): ?string
    {
        return $this->CountryId;
    }

    /**
     * @param string $CountryId
     *
     * @return AddressDataType
     */
    public function setCountryId(string $CountryId): AddressDataType
    {
        $this->CountryId = $CountryId;
        return $this;
    }

    /**
     * @return CountryIdType
     */
    public function getCountryIdType(): ?CountryIdType
    {
        return $this->CountryIdType;
    }

    /**
     * @param CountryIdType $CountryIdType
     *
     * @return AddressDataType
     */
    public function setCountryIdType(CountryIdType $CountryIdType): AddressDataType
    {
        $this->CountryIdType = $CountryIdType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNata(): ?bool
    {
        return $this->Nata;
    }

    /**
     * @param boolean $Nata
     *
     * @return AddressDataType
     */
    public function setNata(bool $Nata): AddressDataType
    {
        $this->Nata = $Nata;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionId(): ?string
    {
        return $this->RegionId;
    }

    /**
     * @param string $RegionId
     *
     * @return AddressDataType
     */
    public function setRegionId(string $RegionId): AddressDataType
    {
        $this->RegionId = $RegionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode(): ?string
    {
        return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     *
     * @return AddressDataType
     */
    public function setZipCode(string $ZipCode): AddressDataType
    {
        $this->ZipCode = $ZipCode;
        return $this;
    }

}
