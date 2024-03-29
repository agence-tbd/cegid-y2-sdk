<?php

namespace Y2\Management;

class ArrayOfUserDefinedTable implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var UserDefinedTable[] $UserDefinedTable
     */
    protected $UserDefinedTable = null;

    public function __construct()
    {

    }

    /**
     * @return UserDefinedTable[]
     */
    public function getUserDefinedTable(): ?array
    {
      return $this->UserDefinedTable;
    }

    /**
     * @param UserDefinedTable[] $UserDefinedTable
     * @return ArrayOfUserDefinedTable
     */
    public function setUserDefinedTable(array $UserDefinedTable = null): ArrayOfUserDefinedTable
    {
      $this->UserDefinedTable = $UserDefinedTable;
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
      return isset($this->UserDefinedTable[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UserDefinedTable
     */
    public function offsetGet($offset): UserDefinedTable
    {
      return $this->UserDefinedTable[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UserDefinedTable $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
      if (!isset($offset)) {
        $this->UserDefinedTable[] = $value;
      } else {
        $this->UserDefinedTable[$offset] = $value;
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
      unset($this->UserDefinedTable[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UserDefinedTable Return the current element
     */
    public function current(): UserDefinedTable
    {
      return current($this->UserDefinedTable);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->UserDefinedTable);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->UserDefinedTable);
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
      reset($this->UserDefinedTable);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->UserDefinedTable);
    }

}
