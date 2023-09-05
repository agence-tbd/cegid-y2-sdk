<?php

namespace Y2\SaleDocument;

class ArrayOfCreate_Payment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Create_Payment[] $Create_Payment
     */
    protected $Create_Payment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Create_Payment[]
     */
    public function getCreate_Payment(): array
    {
      return $this->Create_Payment;
    }

    /**
     * @param Create_Payment[] $Create_Payment
     * @return ArrayOfCreate_Payment
     */
    public function setCreate_Payment(array $Create_Payment = null): ArrayOfCreate_Payment
    {
      $this->Create_Payment = $Create_Payment;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset): bool
    {
      return isset($this->Create_Payment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Create_Payment
     */
    public function offsetGet($offset): Create_Payment
    {
      return $this->Create_Payment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Create_Payment $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
      if (!isset($offset)) {
        $this->Create_Payment[] = $value;
      } else {
        $this->Create_Payment[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset): void
    {
      unset($this->Create_Payment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Create_Payment Return the current element
     */
    public function current(): Create_Payment
    {
      return current($this->Create_Payment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Create_Payment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->Create_Payment);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid(): bool
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind(): void
    {
      reset($this->Create_Payment);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->Create_Payment);
    }

}
