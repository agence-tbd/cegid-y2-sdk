<?php

namespace Y2\Management;

class HelloWorld
{
    /**
     * @var string $text
     */
    protected $text = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param string $text
     * @param RetailContext $clientContext
     */
    public function __construct(string $text, RetailContext $clientContext)
    {
      $this->text = $text;
      $this->clientContext = $clientContext;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
      return $this->text;
    }

    /**
     * @param string $text
     * @return HelloWorld
     */
    public function setText(string $text): HelloWorld
    {
      $this->text = $text;
      return $this;
    }

    /**
     * @return RetailContext
     */
    public function getClientContext(): RetailContext
    {
      return $this->clientContext;
    }

    /**
     * @param RetailContext $clientContext
     * @return HelloWorld
     */
    public function setClientContext(RetailContext $clientContext): HelloWorld
    {
      $this->clientContext = $clientContext;
      return $this;
    }
}
