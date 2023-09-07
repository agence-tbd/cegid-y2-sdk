<?php

namespace Y2\Management;

class ArrayOfUserField implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var UserField[] $UserField
     */
    protected $UserField = null;

    public function __construct()
    {

    }

    /**
     * @return UserField[]
     */
    public function getUserField(): ?array
    {
      return $this->UserField;
    }

    /**
     * @param UserField[] $UserField
     * @return ArrayOfUserField
     */
    public function setUserField(array $UserField = null): ArrayOfUserField
    {
      $this->UserField = $UserField;
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
      return isset($this->UserField[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UserField
     */
    public function offsetGet($offset): UserField
    {
      return $this->UserField[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UserField $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
      if (!isset($offset)) {
        $this->UserField[] = $value;
      } else {
        $this->UserField[$offset] = $value;
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
      unset($this->UserField[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UserField Return the current element
     */
    public function current(): UserField
    {
      return current($this->UserField);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->UserField);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->UserField);
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
      reset($this->UserField);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->UserField);
    }

}
