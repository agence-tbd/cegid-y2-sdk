<?php

namespace Y2\Management;

class ArrayOfCreateFrom_Payment implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var CreateFrom_Payment[] $Payment
     */
    protected $Payment = null;

    public function __construct()
    {

    }

    /**
     * @return CreateFrom_Payment[]
     */
    public function getPayment(): ?array
    {
      return $this->Payment;
    }

    /**
     * @param CreateFrom_Payment[] $Payments
     * @return ArrayOfCreateFrom_Payment
     */
    public function setPayment(array $Payments = null): ArrayOfCreateFrom_Payment
    {
      $this->Payment = $Payments;
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
      return isset($this->Payment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CreateFrom_Payment
     */
    public function offsetGet($offset): CreateFrom_Payment
    {
      return $this->Payment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CreateFrom_Payment $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
      if (!isset($offset)) {
        $this->Payment[] = $value;
      } else {
        $this->Payment[$offset] = $value;
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
      unset($this->Payment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CreateFrom_Payment Return the current element
     */
    public function current(): CreateFrom_Payment
    {
      return current($this->Payment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Payment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->Payment);
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
      reset($this->Payment);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->Payment);
    }

}
