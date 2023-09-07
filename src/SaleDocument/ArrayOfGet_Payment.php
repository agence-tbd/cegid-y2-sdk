<?php

namespace Y2\SaleDocument;

class ArrayOfGet_Payment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Get_Payment[] $Get_Payment
     */
    protected $Get_Payment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Get_Payment[]
     */
    public function getGet_Payment(): ?array
    {
      return $this->Get_Payment;
    }

    /**
     * @param Get_Payment[] $Get_Payment
     * @return ArrayOfGet_Payment
     */
    public function setGet_Payment(array $Get_Payment = null): ArrayOfGet_Payment
    {
      $this->Get_Payment = $Get_Payment;
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
      return isset($this->Get_Payment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Get_Payment
     */
    public function offsetGet($offset): Get_Payment
    {
      return $this->Get_Payment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Get_Payment $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
      if (!isset($offset)) {
        $this->Get_Payment[] = $value;
      } else {
        $this->Get_Payment[$offset] = $value;
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
      unset($this->Get_Payment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Get_Payment Return the current element
     */
    public function current(): Get_Payment
    {
      return current($this->Get_Payment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Get_Payment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->Get_Payment);
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
      reset($this->Get_Payment);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->Get_Payment);
    }

}
