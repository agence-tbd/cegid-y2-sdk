<?php

namespace Y2\Customer;

class BirthDateDataType
{
    /**
     * @var int $BirthDateDay
     */
    protected $BirthDateDay = null;

    /**
     * @var int $BirthDateMonth
     */
    protected $BirthDateMonth = null;

    /**
     * @var int $BirthDateYear
     */
    protected $BirthDateYear = null;


    public function __construct()
    {

    }

    /**
     * @return int
     */
    public function getBirthDateDay(): int
    {
        return $this->BirthDateDay;
    }

    /**
     * @param int $BirthDateDay
     *
     * @return BirthDateDataType
     */
    public function setBirthDateDay(int $BirthDateDay): BirthDateDataType
    {
        $this->BirthDateDay = $BirthDateDay;
        return $this;
    }

    /**
     * @return int
     */
    public function getBirthDateMonth(): int
    {
        return $this->BirthDateMonth;
    }

    /**
     * @param int $BirthDateMonth
     *
     * @return BirthDateDataType
     */
    public function setBirthDateMonth(int $BirthDateMonth): BirthDateDataType
    {
        $this->BirthDateMonth = $BirthDateMonth;
        return $this;
    }

    /**
     * @return int
     */
    public function getBirthDateYear(): int
    {
        return $this->BirthDateYear;
    }

    /**
     * @param int $BirthDateYear
     *
     * @return BirthDateDataType
     */
    public function setBirthDateYear(int $BirthDateYear): BirthDateDataType
    {
        $this->BirthDateYear = $BirthDateYear;
        return $this;
    }

}
