<?php

namespace Y2\SaleDocument;

class ArrayOfUpdate_Line implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Update_Line[] $Update_Line
     */
    protected $Update_Line = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Update_Line[]
     */
    public function getUpdate_Line(): ?array
    {
      return $this->Update_Line;
    }

    /**
     * @param Update_Line[] $Update_Line
     * @return ArrayOfUpdate_Line
     */
    public function setUpdate_Line(array $Update_Line = null): ArrayOfUpdate_Line
    {
      $this->Update_Line = $Update_Line;
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
      return isset($this->Update_Line[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Update_Line
     */
    public function offsetGet($offset): Update_Line
    {
      return $this->Update_Line[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Update_Line $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
      if (!isset($offset)) {
        $this->Update_Line[] = $value;
      } else {
        $this->Update_Line[$offset] = $value;
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
      unset($this->Update_Line[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Update_Line Return the current element
     */
    public function current(): Update_Line
    {
      return current($this->Update_Line);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Update_Line);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->Update_Line);
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
      reset($this->Update_Line);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->Update_Line);
    }

}
