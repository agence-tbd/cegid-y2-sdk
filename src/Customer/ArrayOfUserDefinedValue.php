<?php

namespace Y2\Customer;

class ArrayOfUserDefinedValue implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var UserDefinedValue[] $UserDefinedValue
     */
    protected $UserDefinedValue = null;

    public function __construct()
    {

    }

    /**
     * @return UserDefinedValue[]
     */
    public function getUserDefinedValue(): array
    {
        return $this->UserDefinedValue;
    }

    /**
     * @param UserDefinedValue[] $UserDefinedValue
     *
     * @return ArrayOfUserDefinedValue
     */
    public function setUserDefinedValue(array $UserDefinedValue = null): ArrayOfUserDefinedValue
    {
        $this->UserDefinedValue = $UserDefinedValue;
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
        return isset($this->UserDefinedValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return UserDefinedValue
     */
    public function offsetGet($offset): UserDefinedValue
    {
        return $this->UserDefinedValue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed            $offset The offset to assign the value to
     * @param UserDefinedValue $value The value to set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (!isset($offset)) {
            $this->UserDefinedValue[] = $value;
        } else {
            $this->UserDefinedValue[$offset] = $value;
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
        unset($this->UserDefinedValue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UserDefinedValue Return the current element
     */
    public function current(): UserDefinedValue
    {
        return current($this->UserDefinedValue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
        next($this->UserDefinedValue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
        return key($this->UserDefinedValue);
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
        reset($this->UserDefinedValue);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
        return count($this->UserDefinedValue);
    }

}
