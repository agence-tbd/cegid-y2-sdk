<?php

namespace Y2\SaleDocument;

class Address
{

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var int $ContactNumber
     */
    protected $ContactNumber = null;

    /**
     * @var string $CountryId
     */
    protected $CountryId = null;

    /**
     * @see CountryIdType
     * @var string $CountryIdType
     */
    protected $CountryIdType = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Line1
     */
    protected $Line1 = null;

    /**
     * @var string $Line2
     */
    protected $Line2 = null;

    /**
     * @var string $Line3
     */
    protected $Line3 = null;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var string $Region
     */
    protected $Region = null;

    /**
     * @var string $TitleId
     */
    protected $TitleId = null;

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
    public function getCity(): string
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return Address
     */
    public function setCity(string $City): Address
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return int
     */
    public function getContactNumber(): int
    {
      return $this->ContactNumber;
    }

    /**
     * @param int $ContactNumber
     * @return Address
     */
    public function setContactNumber(int $ContactNumber): Address
    {
      $this->ContactNumber = $ContactNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryId(): string
    {
      return $this->CountryId;
    }

    /**
     * @param string $CountryId
     * @return Address
     */
    public function setCountryId(string $CountryId): Address
    {
      $this->CountryId = $CountryId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryIdType(): string
    {
      return $this->CountryIdType;
    }

    /**
     * @param string $CountryIdType
     * @return Address
     */
    public function setCountryIdType(string $CountryIdType): Address
    {
      $this->CountryIdType = $CountryIdType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return Address
     */
    public function setFirstName(string $FirstName): Address
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return Address
     */
    public function setLastName(string $LastName): Address
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine1(): string
    {
      return $this->Line1;
    }

    /**
     * @param string $Line1
     * @return Address
     */
    public function setLine1(string $Line1): Address
    {
      $this->Line1 = $Line1;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine2(): string
    {
      return $this->Line2;
    }

    /**
     * @param string $Line2
     * @return Address
     */
    public function setLine2(string $Line2): Address
    {
      $this->Line2 = $Line2;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine3(): string
    {
      return $this->Line3;
    }

    /**
     * @param string $Line3
     * @return Address
     */
    public function setLine3(string $Line3): Address
    {
      $this->Line3 = $Line3;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
      return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return Address
     */
    public function setPhoneNumber(string $PhoneNumber): Address
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
      return $this->Region;
    }

    /**
     * @param string $Region
     * @return Address
     */
    public function setRegion(string $Region): Address
    {
      $this->Region = $Region;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitleId(): string
    {
      return $this->TitleId;
    }

    /**
     * @param string $TitleId
     * @return Address
     */
    public function setTitleId(string $TitleId): Address
    {
      $this->TitleId = $TitleId;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
      return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return Address
     */
    public function setZipCode(string $ZipCode): Address
    {
      $this->ZipCode = $ZipCode;
      return $this;
    }

}
