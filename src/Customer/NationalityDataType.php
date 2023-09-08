<?php

namespace Y2\Customer;

class NationalityDataType
{
    /**
     * @var string $ISO2
     */
    protected $ISO2 = null;

    /**
     * @var string $ISO3
     */
    protected $ISO3 = null;

    /**
     * @var string $ISO3Num
     */
    protected $ISO3Num = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $Label
     */
    protected $Label = null;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getISO2(): string
    {
        return $this->ISO2;
    }

    /**
     * @param string $ISO2
     *
     * @return NationalityDataType
     */
    public function setISO2(string $ISO2): NationalityDataType
    {
        $this->ISO2 = $ISO2;
        return $this;
    }

    /**
     * @return string
     */
    public function getISO3(): string
    {
        return $this->ISO3;
    }

    /**
     * @param string $ISO3
     *
     * @return NationalityDataType
     */
    public function setISO3(string $ISO3): NationalityDataType
    {
        $this->ISO3 = $ISO3;
        return $this;
    }

    /**
     * @return string
     */
    public function getISO3Num(): string
    {
        return $this->ISO3Num;
    }

    /**
     * @param string $ISO3Num
     *
     * @return NationalityDataType
     */
    public function setISO3Num(string $ISO3Num): NationalityDataType
    {
        $this->ISO3Num = $ISO3Num;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     *
     * @return NationalityDataType
     */
    public function setId(?string $Id): NationalityDataType
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): ?string
    {
        return $this->Label;
    }

    /**
     * @param string $Label
     *
     * @return NationalityDataType
     */
    public function setLabel(?string $Label): NationalityDataType
    {
        $this->Label = $Label;
        return $this;
    }

}
