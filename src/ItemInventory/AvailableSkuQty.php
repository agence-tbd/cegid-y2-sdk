<?php

namespace Y2\ItemInventory;

class AvailableSkuQty
{
    /**
     * @var float $AvailableQty
     */
    protected $AvailableQty = null;

    /**
     * @var string $Dimension1
     */
    protected $Dimension1 = null;

    /**
     * @var string $Dimension2
     */
    protected $Dimension2 = null;

    /**
     * @var string $Dimension3
     */
    protected $Dimension3 = null;

    /**
     * @var string $Dimension4
     */
    protected $Dimension4 = null;

    /**
     * @var string $Dimension5
     */
    protected $Dimension5 = null;

    public function __construct()
    {

    }

    /**
     * @return float
     */
    public function getAvailableQty(): ?float
    {
        return $this->AvailableQty;
    }

    /**
     * @param float $AvailableQty
     * @return AvailableSkuQty
     */
    public function setAvailableQty(?float $AvailableQty): AvailableSkuQty
    {
        $this->AvailableQty = $AvailableQty;
        return $this;
    }

    /**
     * @return string
     */
    public function getDimension1(): string
    {
        return $this->Dimension1;
    }

    /**
     * @param string $Dimension1
     * @return AvailableSkuQty
     */
    public function setDimension1(string $Dimension1): AvailableSkuQty
    {
        $this->Dimension1 = $Dimension1;
        return $this;
    }

    /**
     * @return string
     */
    public function getDimension2(): string
    {
        return $this->Dimension2;
    }

    /**
     * @param string $Dimension2
     * @return AvailableSkuQty
     */
    public function setDimension2(string $Dimension2): AvailableSkuQty
    {
        $this->Dimension2 = $Dimension2;
        return $this;
    }

    /**
     * @return string
     */
    public function getDimension3(): string
    {
        return $this->Dimension3;
    }

    /**
     * @param string $Dimension3
     * @return AvailableSkuQty
     */
    public function setDimension3(string $Dimension3): AvailableSkuQty
    {
        $this->Dimension3 = $Dimension3;
        return $this;
    }

    /**
     * @return string
     */
    public function getDimension4(): string
    {
        return $this->Dimension4;
    }

    /**
     * @param string $Dimension4
     * @return AvailableSkuQty
     */
    public function setDimension4(string $Dimension4): AvailableSkuQty
    {
        $this->Dimension4 = $Dimension4;
        return $this;
    }

    /**
     * @return string
     */
    public function getDimension5(): string
    {
        return $this->Dimension5;
    }

    /**
     * @param string $Dimension5
     * @return AvailableSkuQty
     */
    public function setDimension5(string $Dimension5): AvailableSkuQty
    {
        $this->Dimension5 = $Dimension5;
        return $this;
    }

}
