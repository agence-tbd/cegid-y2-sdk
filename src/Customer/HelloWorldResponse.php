<?php

namespace Y2\Customer;

class HelloWorldResponse
{
    /**
     * @var string $HelloWorldResult
     */
    protected $HelloWorldResult = null;

    /**
     * @param string $HelloWorldResult
     */
    public function __construct(string $HelloWorldResult)
    {
        $this->HelloWorldResult = $HelloWorldResult;
    }

    /**
     * @return string
     */
    public function getHelloWorldResult(): string
    {
        return $this->HelloWorldResult;
    }

    /**
     * @param string $HelloWorldResult
     *
     * @return HelloWorldResponse
     */
    public function setHelloWorldResult(string $HelloWorldResult): HelloWorldResponse
    {
        $this->HelloWorldResult = $HelloWorldResult;
        return $this;
    }

}
