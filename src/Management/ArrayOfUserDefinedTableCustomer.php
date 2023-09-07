<?php

namespace Y2\Management;

class ArrayOfUserDefinedTableCustomer implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var UserDefinedTableCustomer[] $UserDefinedTableCustomer
     */
    protected $UserDefinedTableCustomer = null;

    public function __construct()
    {

    }

    /**
     * @return UserDefinedTableCustomer[]
     */
    public function getUserDefinedTableCustomer(): ?array
    {
      return $this->UserDefinedTableCustomer;
    }

    /**
     * @param UserDefinedTableCustomer[] $UserDefinedTableCustomer
     * @return ArrayOfUserDefinedTableCustomer
     */
    public function setUserDefinedTableCustomer(array $UserDefinedTableCustomer = null): ArrayOfUserDefinedTableCustomer
    {
      $this->UserDefinedTableCustomer = $UserDefinedTableCustomer;
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
      return isset($this->UserDefinedTableCustomer[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UserDefinedTableCustomer
     */
    public function offsetGet($offset): UserDefinedTableCustomer
    {
      return $this->UserDefinedTableCustomer[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UserDefinedTableCustomer $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
      if (!isset($offset)) {
        $this->UserDefinedTableCustomer[] = $value;
      } else {
        $this->UserDefinedTableCustomer[$offset] = $value;
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
      unset($this->UserDefinedTableCustomer[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UserDefinedTableCustomer Return the current element
     */
    public function current(): UserDefinedTableCustomer
    {
      return current($this->UserDefinedTableCustomer);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->UserDefinedTableCustomer);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->UserDefinedTableCustomer);
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
      reset($this->UserDefinedTableCustomer);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->UserDefinedTableCustomer);
    }

}
