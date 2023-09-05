<?php

namespace Y2\Customer;

class ArrayOfUserDefinedDate implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var UserDefinedDate[] $UserDefinedDate
     */
    protected $UserDefinedDate = null;

    public function __construct()
    {

    }

    /**
     * @return UserDefinedDate[]
     */
    public function getUserDefinedDate(): array
    {
        return $this->UserDefinedDate;
    }

    /**
     * @param UserDefinedDate[] $UserDefinedDate
     *
     * @return ArrayOfUserDefinedDate
     */
    public function setUserDefinedDate(array $UserDefinedDate = null): ArrayOfUserDefinedDate
    {
        $this->UserDefinedDate = $UserDefinedDate;
        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     *
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset): bool
    {
        return isset($this->UserDefinedDate[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return UserDefinedDate
     */
    public function offsetGet($offset): UserDefinedDate
    {
        return $this->UserDefinedDate[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed           $offset The offset to assign the value to
     * @param UserDefinedDate $value The value to set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (!isset($offset)) {
            $this->UserDefinedDate[] = $value;
        } else {
            $this->UserDefinedDate[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->UserDefinedDate[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UserDefinedDate Return the current element
     */
    public function current(): UserDefinedDate
    {
        return current($this->UserDefinedDate);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
        next($this->UserDefinedDate);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
        return key($this->UserDefinedDate);
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
        reset($this->UserDefinedDate);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
        return count($this->UserDefinedDate);
    }

}
