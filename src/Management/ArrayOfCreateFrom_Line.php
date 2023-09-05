<?php

namespace Y2\Management;

class ArrayOfCreateFrom_Line implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var CreateFrom_Line[] $Line
     */
    protected $Line = null;

    public function __construct()
    {

    }

    /**
     * @return CreateFrom_Line[]
     */
    public function getLine(): array
    {
      return $this->Line;
    }

    /**
     * @param CreateFrom_Line[] $Lines
     * @return ArrayOfCreateFrom_Line
     */
    public function setLine(array $Lines = null): ArrayOfCreateFrom_Line
    {
      $this->Line = $Lines;
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
      return isset($this->Line[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CreateFrom_Line
     */
    public function offsetGet($offset): CreateFrom_Line
    {
      return $this->Line[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CreateFrom_Line $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
      if (!isset($offset)) {
        $this->Line[] = $value;
      } else {
        $this->Line[$offset] = $value;
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
      unset($this->Line[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CreateFrom_Line Return the current element
     */
    public function current(): CreateFrom_Line
    {
      return current($this->Line);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Line);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->Line);
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
      reset($this->Line);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->Line);
    }

}
