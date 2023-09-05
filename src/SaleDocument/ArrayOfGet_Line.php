<?php

namespace Y2\SaleDocument;

class ArrayOfGet_Line implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Get_Line[] $Get_Line
     */
    protected $Get_Line = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Get_Line[]
     */
    public function getGet_Line(): array
    {
      return $this->Get_Line;
    }

    /**
     * @param Get_Line[] $Get_Line
     * @return ArrayOfGet_Line
     */
    public function setGet_Line(array $Get_Line = null): ArrayOfGet_Line
    {
      $this->Get_Line = $Get_Line;
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
      return isset($this->Get_Line[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Get_Line
     */
    public function offsetGet($offset): Get_Line
    {
      return $this->Get_Line[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Get_Line $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
      if (!isset($offset)) {
        $this->Get_Line[] = $value;
      } else {
        $this->Get_Line[$offset] = $value;
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
      unset($this->Get_Line[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Get_Line Return the current element
     */
    public function current(): Get_Line
    {
      return current($this->Get_Line);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Get_Line);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->Get_Line);
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
      reset($this->Get_Line);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->Get_Line);
    }

}
