<?php

namespace Y2\SaleDocument;

class ArrayOfCreate_Tax implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Create_Tax[] $Create_Tax
     */
    protected $Create_Tax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Create_Tax[]
     */
    public function getCreate_Tax(): array
    {
      return $this->Create_Tax;
    }

    /**
     * @param Create_Tax[] $Create_Tax
     * @return ArrayOfCreate_Tax
     */
    public function setCreate_Tax(array $Create_Tax = null): ArrayOfCreate_Tax
    {
      $this->Create_Tax = $Create_Tax;
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
      return isset($this->Create_Tax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Create_Tax
     */
    public function offsetGet($offset): Create_Tax
    {
      return $this->Create_Tax[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Create_Tax $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
      if (!isset($offset)) {
        $this->Create_Tax[] = $value;
      } else {
        $this->Create_Tax[$offset] = $value;
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
      unset($this->Create_Tax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Create_Tax Return the current element
     */
    public function current(): Create_Tax
    {
      return current($this->Create_Tax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Create_Tax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->Create_Tax);
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
      reset($this->Create_Tax);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->Create_Tax);
    }

}
